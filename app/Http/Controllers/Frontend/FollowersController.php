<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Follower;
use App\Notifications\UserFollowAccept;
use App\User;

class FollowersController extends Controller
{
    public function store(Request $request){
        $user = auth()->user();

        if($user->id == $request->following_id){
            return abort(404);
        }

        $following =  $user->following()->create(['following_id' => $request->following_id]);

        return 'success';
    }
    public function index(Request $request){
        $user = auth()->user();
        $following =  $user->following;
        return response()->json($following);
    }

    public function markAsRead(Request $request){
        $user = auth()->user();
        $follow_id =  $request->follow_id;
        $follow = Follower::findOrFail($follow_id);
        // return $follow;
        if($request->action == 'read'){
            $follow->status = '1';
            $follow->save();
            $owner = User::find($follow->user_id);
            $owner->notify(new UserFollowAccept($user));
            return response()->json('Request Accepted');
        }
        if($request->action == 'delete'){
            $follow->delete();
            return response()->json('Request Deleted');
        }
        
    }
}
