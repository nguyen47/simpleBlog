<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Categories;
use App\Comment;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
class homeController extends Controller
{
  //
  public function index(){
    $posts = Posts::paginate(5);
    $categories = Categories::all();
    return view('welcome',['posts'=>$posts, 'categories'=>$categories]);
  }

  public function chitiet($id){
    $posts = Posts::find($id);
    $categories = Categories::all();
    $comment = Comment::Where([['status','1'], ['posts_id',$id]])->get();
    return view('chitiet',['posts'=>$posts, 'categories'=>$categories,'comment'=>$comment]);
  }

  public function postComment($id, Request $request){
    $posts = Posts::find($id);
    $comment = new Comment;
    $comment->user_id = $request->user_id;
    $comment->posts_id = $request->posts_id;
    $comment->content = $request->content;
    $comment->status = $request->status;
    $comment->save();
    return back();
  }

  public function search(Request $request){
    $search = $request->search;
    $posts = Posts::where('title','LIKE','%'.$search.'%')->get();
    $categories = Categories::all();
    // dd($posts);
    return view('search',['posts'=>$posts, 'categories'=>$categories]);
  }
}
