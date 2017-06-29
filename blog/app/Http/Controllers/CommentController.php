<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;

class CommentController extends Controller
{
	public function __construct()
	{
    	$this->middleware('auth');
	}

    public function newComment(Request $request)
    {

        $comment = new Comment;
        $comment->entry_id = $request->entry_id;
        $comment->user_id = Auth::user()->id;
        $comment->content = $request->content;
        $comment->save();

        return redirect(route('stories'));
    }
}