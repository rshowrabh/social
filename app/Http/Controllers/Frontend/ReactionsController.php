<?php

namespace App\Http\Controllers\Frontend;

use App\Notifications\UserLikeNotifications;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Reaction;
use App\User;
use Illuminate\Notifications\Notification;

class ReactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reaction = Reaction::all();

    }

    public function markAsRead(){
        auth()->user()->unreadNotifications->markAsRead();
    }

    public function getLike(Request $request){


        $user = auth()->user();

        $reaction = Reaction::where('user_id', $user->id)->get();

        return response()->json($reaction);

    }

    public function getTotalLike(Request $request){


        $reaction = Reaction::where('reaction', 1)->get();

        return response()->json($reaction);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $user = auth()->user();

       $reaction = Reaction::firstOrNew(['user_id' => $user->id , 'post_id' => $request->post_id]);

       $reaction->reaction = $request->reaction;
    
       $reaction->save();

       $id = Post::find($request->post_id)->user_id;

       $owner = User::find($id);
    
       if($reaction->reaction == 1){      
       $owner->notify(new UserLikeNotifications($user));
       }
       
       return response()->json($reaction);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
