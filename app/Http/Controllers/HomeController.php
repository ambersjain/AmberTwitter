<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        // Grab tweets from messages database
        // This grabs all rows from messages table
        $messages = Message::all();

        // How to pass this message varriable to the VIEW?
        // As shown below, in an array
        return view('home', [
            'messages' => $messages
        ]);
    }

    public function create(Request $request)
    {
        // This function is executed once tweet button is pressed

        // SAVING THE INFORMATION FILLED IN THE FORM BACK TO THE DATABASE
        $message = new Message();
        $message->title = $request->title;
        $message->content = $request->content_;
        $message->save();

        return redirect('/');
    }

    public function view($id)
    {
        $tweet = Message::findOrFail($id);
        return view('tweet', [
            'tweet' => $tweet
        ]);

    }
}
