<?php

namespace App\Http\Controllers;

use App\Models\UserMessage;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function supportchat($id)
    {
        $chat = UserMessage::where('recevier_id',$id)->get();
        return view('supportchat', compact('chat' , 'id'));
    }

    public function customsupportchat(Request $request)
    {
        $chat = new UserMessage();
        $chat->recevier_id = $request->id;
        $chat->sender_id = 1; // Assuming the admin has an ID of 1
        $chat->message = $request->message;
        $chat->save();

        return redirect()->back();
    }

    public function useradminview(){
        $chat = UserMessage::all();
        return view('useradminview' , compact('chat'));
    }


}
