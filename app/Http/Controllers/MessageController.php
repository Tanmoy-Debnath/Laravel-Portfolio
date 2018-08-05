<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function home(){
        return view('front-end.home');
    }
    public function saveMessage(Request $request) {

        $this->validate($request,[

            'name' => 'required|regex:/^[\pL\s\-]+$/u|max:20|min:2',
            'mail' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $message = new Message();

        $message->name = $request->name;
        $message->mail = $request->mail;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        return view('front-end.feedback');

    }
    public function ShowMessage() {
        $messages = Message::all();
    return view('admin.message.show-message',[
        'messages' => $messages
    ]);
    }
    public function deleteMessage($id){
        $message = Message::find($id);
        $message->delete();

        return redirect('/message/show')->with('message', 'Message deleted Succesfully');
    }
}
