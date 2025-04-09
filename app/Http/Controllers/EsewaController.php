<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class EsewaController extends Controller
{
    public function success(Request $request)
    {
        return redirect()->route('dynamic.page', ['slug' => 'my-booking'])->with('success', 'Your Payment has been submitted.');
    }

    public function failure(Request $request)
    {
        return redirect()->route('dynamic.page', ['slug' => 'my-booking'])->with('success', 'Your Payment has been submitted.');
    }
}
