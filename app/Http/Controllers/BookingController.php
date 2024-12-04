<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
         // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'package' => 'required|string|max:255',
            'travelers' => 'required|integer|min:1',
            'travel_date' => 'required|date|after_or_equal:today',
            'additional_requests' => 'nullable|string|max:1000',
        ]);



        // Store the booking in the database
        Booking::create($validated);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Your booking has been successfully submitted!');
    }

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required',
        ]);

        $bookings = Booking::where('email', 'like', '%'. $request->search . '%')->get();

        return view('search-results', compact('bookings'));
    }

    public function index(Request $request)
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

        $bookings = $query->paginate(10);
        return view('bookings.index', compact('bookings'));
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
