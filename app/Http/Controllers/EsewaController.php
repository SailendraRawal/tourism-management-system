<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class EsewaController extends Controller
{
    public function success(Request $request)
    {
        // Retrieve Base64 encoded response
        $encodedResponse = $request->query('data');

        if (!$encodedResponse) {
            return redirect()->route('dynamic.page', ['slug' => 'my-booking'])->with('error', 'No response received from eSewa.');
        }

        // Decode the Base64 response
        $decodedJson = base64_decode($encodedResponse);
        $responseData = json_decode($decodedJson, true);

        if (!$responseData) {
            return redirect()->route('dynamic.page', ['slug' => 'my-booking'])->with('error', 'Unable to decode eSewa response.');
        }

        // Check if the response contains the expected fields
        if (isset($responseData['transaction_uuid'])) {
            // Find the booking by transaction UUID
            $transactionUuidParts = explode('_', $responseData['transaction_uuid']);
            $bookingId = $transactionUuidParts[0]; // Booking ID is the part before '_'

            $booking = Booking::find($bookingId);
            if ($booking) {
                // Here, update the booking status to confirmed
                $booking->update(['payment_status' => 'confirmed']);

                // Redirect to my-booking page with success message
                return redirect()->route('dynamic.page', ['slug' => 'my-booking'])->with('success', 'Your payment has been successfully received!');
            }
        }

        // If payment status is not 'COMPLETE' or something went wrong
        return redirect()->route('dynamic.page', ['slug' => 'my-booking'])->with('error', 'Payment verification failed.');
    }


}
