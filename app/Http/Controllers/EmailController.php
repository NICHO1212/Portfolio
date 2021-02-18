<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\ContactTo;
use App\Notifications\ContactFrom;
use App\User;
use Notification;

class EmailController extends Controller
{
    public function send(Request $request) {
        $contact = $request->validate([
            'email' => 'required|email',
            'message' => 'required|max:255'
        ]);
        
        try {
            Notification::route('mail', $contact['email'])
                ->notify(new ContactFrom());
            Notification::route('mail', config('app.email'))
                ->notify(new ContactTo($contact));
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->withErrors([
                'error' => 'Oops! There was an error, please try again later.'
            ]);
        }
        return redirect()->back()->withErrors([
            'success' => 'Thanks for your message. I\'ll be in touch with you as soon as possible'
        ]);
    }
}
