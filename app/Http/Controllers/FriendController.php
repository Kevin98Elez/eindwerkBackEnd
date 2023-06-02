<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function addFriend(Request $request)
    {
        $user = auth()->user();
        $friendId = $request->input('friend_id');
        
        $friends = $user->friends ?? [];
        $friends[] = $friendId;
        
        $user->friends = $friends;
        $user->save();
        
        return response()->json(['message' => 'Friend added successfully']);
    }

    public function getFriends()
    {
        $user = auth()->user();
        $friends = User::whereIn('id', $user->friends ?? [])->get();

        return response()->json($friends);
    }
}

