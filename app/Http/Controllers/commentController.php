<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Comment;

class commentController extends Controller
{
    //

	public function all(){
		$comment = Comment::all();
		return view('admin.comment.list',['comment'=>$comment]);
	}

	public function delete($id){
		$comment = Comment::find($id);

		$comment->delete();

		return redirect('admin/comment/all');
	}

	public function commentByPost($id){
		$comment = Comment::where('posts_id',$id)->get();
		return view('admin.comment.commentByPost',['comment'=>$comment]);
	}

	public function duyetConmment($id){
		$comment =  Comment::find($id);
		return view('admin.comment.details',['comment'=>$comment]);
	}

	public function duyetComment($id, Request $request){
		$comment =  Comment::find($id);
		$comment->status = $request->status;

		$comment->save();
		return redirect('admin/comment/all');
	}
}
