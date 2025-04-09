<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    public function booking()
    {
        return view('user-role.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'person_count' => 'required|integer|min:1',
            'booking_date' => 'required|date|after_or_equal:today',
            'phone' => 'required|string|max:15',
            'package_id' => 'required|exists:packages,id',
        ]);

        $user = auth()->user();
        $package = Package::findOrFail($validated['package_id']);
        $amount = $package->price * $validated['person_count'];

        $booking = Booking::create([
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $validated['phone'],
            'status' => 'pending',
            'package_id' => $package->id,
            'package' => $package->name,
            'travelers' => $validated['person_count'],
            'travel_date' => $validated['booking_date'],
        ]);

        $totalAmount = number_format($amount, 2, '.', '');
        $transaction_uuid = $booking->id . '_' . time();
        $product_code = env('ESEWA_MERCHANT_CODE', 'EPAYTEST');
        $secretKey = env('ESEWA_SECRET_KEY', '8gBm/:&EnhH.1/q');

        $rawSignature = "total_amount={$totalAmount},transaction_uuid={$transaction_uuid},product_code={$product_code}";
        $hash = hash_hmac('sha256', $rawSignature, $secretKey, true);
        $signature = base64_encode($hash);

        // Render a Blade form with hidden fields and auto-submit
        return view('esewa.redirect', compact('totalAmount', 'transaction_uuid', 'product_code', 'signature', 'booking'));
    }

    public function myBooking(Request $request)
    {
        $query = Booking::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $query->where('user_id', auth()->user()->id);

        $bookings = $query->paginate(10);
        return view('bookings.form', compact('bookings'));
    }

    public function approve($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'approved';
        $booking->save();

        return redirect()->back()->with('message', 'Booking approved successfully.');
    }

    public function rejectBooking(Booking $booking)
    {
        // Check if the booking is in 'pending' status
        if ($booking->status === 'pending') {
            $booking->status = 'rejected'; // Change status to 'rejected'
            $booking->save(); // Save the changes to the database
        }

        // Redirect back with a success message
        return redirect()->back()->with('status', 'Booking rejected successfully!');
    }
}
