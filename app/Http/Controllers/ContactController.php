<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'interest' => 'required|string|max:255',
            'message' => 'required|string',
            'consent' => 'required|accepted'
        ]);

        try {
            $response = Http::post('https://api.web3forms.com/submit', [
                'access_key' => '96d41d8b-5b1e-499d-84cb-5d28559c45f4',
                'subject' => 'New Inquiry from Àlá Premium Charcoal Website',
                'from_name' => 'Àlá Premium Charcoal',
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'interest' => $request->interest,
                'message' => $request->message,
                'consent' => $request->consent ? 'Yes' : 'No'
            ]);

            if ($response->successful()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you! Your message has been sent successfully.'
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Failed to send message. Please try again.'
            ], 500);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred. Please try again later.'
            ], 500);
        }
    }
} 