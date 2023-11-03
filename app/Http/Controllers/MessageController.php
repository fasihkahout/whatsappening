<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function create($id) {
        $form = Form::find($id);
        return view('create', compact('form'));
    }

    public function store(Request $request)
    {
        $message = new Message;
        $message->sender_id = $request->sender_id;
        $message->recipient_id = 1; // Assuming the admin has an ID of 1
        $message->body = $request->input('body');
        $message->save();

        return redirect()->back()->with('success', 'Message sent!');
    }

    public function index()
    {
        $messages = Message::all();

        return view('messageindex', compact('messages'));
    }

    public function show(Message $message)
    {
        return view('message', compact('message'));
    }
}
