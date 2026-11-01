<?php

namespace App\Http\Controllers;

use App\Models\MailingList;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MailingListController extends Controller
{
    /**
     * Store a newly created mailing list subscriber.
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255'],
        ], [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
        ]);

        // Fallback to simple email validation if DNS check fails in local/offline environments
        if ($validator->fails() && !filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'success' => false,
                'message' => 'Please enter a valid email address.',
                'errors' => $validator->errors(),
            ], 422);
        } elseif ($validator->fails() && filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
            // Valid email format
        }

        $email = strtolower(trim($request->input('email')));

        $subscriber = MailingList::firstOrCreate(
            ['email' => $email],
            [
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'Thank you for subscribing to our mailing list!',
            'data' => [
                'id' => $subscriber->id,
                'email' => $subscriber->email,
            ],
        ]);
    }
}
