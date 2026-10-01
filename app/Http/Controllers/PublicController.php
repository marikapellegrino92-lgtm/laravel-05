<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }

    public function contactUs()
    {
        return view('contattaci');
    }

   public function submit(Request $request)
{
    $user = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('message');

    $userData = [
        'user' => $user,
        'message' => $message
    ];

    try {
        Mail::to($email)->send(new ContactMail($userData));

        return to_route('home')->with('EmailSent', 'Grazie! Il tuo messaggio è stato inviato.');
    } catch (\Exception $e) {
        return to_route('home')->with('Emailerror', 'Si è verificato un errore nell\'invio del messaggio.');
    }
}

}

       