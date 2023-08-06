<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{
    //
    public function storeMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email:dns',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|string'
        ]);
    
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
    
        $message->save();
    
        return redirect()->route('cservice')->with('success', 'Message Successfully Sent');
    }
    
    
        public function view()
        {
            $user = Auth::user();
           return view('/cservice',[
            'title' => 'Contact Service',
            'user' => $user
           ]);
        }
}
