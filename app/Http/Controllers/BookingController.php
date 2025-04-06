<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking()
    {
        return view('user-role.index');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'person_count' => 'required|integer|min:1',
            'booking_date' => 'required|date|after_or_equal:today',
            'phone' => 'required|string|max:15', // You might want to validate phone too
            'package_id' => 'required|exists:packages,id',
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Fetch the package by ID
        $package = Package::findOrFail($request->package_id);

        // Build the booking data
        $bookingData = [
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $request->phone,
            'status' => 'pending',
            'package_id' => $package->id,
            'package' => $package->name,
            'travelers' => $validated['person_count'],
            'travel_date' => $validated['booking_date'],
        ];

        // Store the booking in the database
        Booking::create($bookingData);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Your booking has been successfully submitted!');
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
