<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Notifications\UserCommentNotifications;
use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validate = $request->validate([
            'text' => 'required',
        ]);

        $user = auth()->user();

        $comment = new Comment;
        $comment->text = $request->text;
        $comment->user_id = $user->id;

       $post =  Post::find($request->post_id);
       
       $comment = $post->comments()->save($comment);

       $owner = User::find($post->user_id);

       $owner->notify(new UserCommentNotifications($user));

        return response()->json($comment);
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
 
        $comment =   Comment::find($id);

        if(auth()->user()->id == $comment->user_id){
            $comment->delete();
            return 'comment deleted';
        }
        return 'unauthorized';
    }
}
