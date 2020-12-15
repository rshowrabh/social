<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Follower;
use App\Message;


class MessagesController extends Controller
{
    public function getContacts(){
        $id = auth()->user()->id;
        $contacts  = User::whereHas('follower', function ($q)  {
           $q->where('following_id', auth()->id());
           $q->orWhere('user_id', auth()->id());
        })->orWhereHas('following', function ($q)  {
            $q->where('following_id', auth()->id());
            $q->orWhere('user_id', auth()->id());
        })
            ->get();

        return response()->json($contacts);
    }

    public function index($id){
        $user = auth()->user();
        $toUser = User::find($id);

       // mark all messages with the selected contact as read
       Message::where('from_id', $id)->where('to_id', auth()->id())->update(['is_read' => true]);

       // get all messages between the authenticated user and the selected user
       $messages = Message::where(function($q) use ($id) {
           $q->where('from_id', auth()->id());
           $q->where('to_id', $id);
       })->orWhere(function($q) use ($id) {
           $q->where('from_id', $id);
           $q->where('to_id', auth()->id());
       })->latest()->with('user')
       ->get();

       return response()->json(['message' => $messages, 'user' => $toUser]);
    }

    public function store(Request $request){
        $user = auth()->user();

        $user->messages()->create([
            'to_id' => $request->to_id,
            'text' => $request->text,
        ]);
    }

    public function get(){
        // get all users except the authenticated one
        $contacts = User::where('id','!=', auth()->id())->whereHas('messages', function($q){
            $q->where('from_id', auth()->id());
            $q->orWhere('to_id', auth()->id());
        })->get();

        // get a collection of items where sender_id is the user who sent us a message
        // and messages_count is the number of unread messages we have from_id him
        $unreadIds = Message::select(\DB::raw('`from_id` as sender_id, count(`from_id`) as messages_count'))
            ->where('to_id', auth()->id())
            ->where('is_read', false)
            ->groupBy('from_id')
            ->take(10)
            ->get();

          // add an unread key to each contact with the count of unread messages
        $contacts->user = $contacts->map(function($contact) use ($unreadIds) {
            $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

            $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

            return $contact;
        });


        return response()->json($contacts);
    }


}
