<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Show a list of tweets

        // Grab tweets from messages database (Model - Message.php)
        // This grabs all rows from messages table
        $messages = Message::all();

        // How to pass this message varriable to the VIEW?
        // As shown below, in an array
        return view('home', [
            'messages' => $messages
        ]);
    }

    public function store()
    {
        // After creation, persist the tweets

        // SAVING THE INFORMATION FILLED IN THE FORM BACK TO THE DATABASE

        // can be shortened

//        $message = new Message();
//        $message->title = $request->title;
//        $message->content = $request->content_;
//        $message->save();

        // creates a new entry into message table
        // But for this to be succesful, you need to also declare in message model
        Message::create([
            'title'=>request('title'),
            'content'=>request('content_'),
        ]);

        return redirect('/');
    }

    // The parameter id is passed from the router as tweet/{id}
    public function view(Message $id)
    {
        // Show a particular tweet
        // Findorfail(): Give me the first id that matches the passed id or fail (throw 404)
        // The message referenced below is the model

        // BINDING REPLACES THIS
        //$tweet = Message::findOrFail($id);
        return view('tweet', [
            'tweet' => $id
        ]);

    }
    public function create()
    {
        // Show a view to create a new tweet

    }
    public function edit($id)
    {
        // Show a view to edit an existing resource

        $tweet = Message::findOrFail($id);
        return view('edit', [
            'tweet' => $tweet
        ]);
    }
    public function update($id, Request $request)
    {
        // Persist the edited tweet
        // SAVING THE INFORMATION FILLED IN THE FORM BACK TO THE DATABASE
        $message = Message::findOrFail($id);

        $message->title = $request->title;
        $message->content = $request->content_;
        $message->save();

        return redirect("/tweet/".$message->id);
    }
    public function destroy()
    {
        // Delete the tweet
    }
}
