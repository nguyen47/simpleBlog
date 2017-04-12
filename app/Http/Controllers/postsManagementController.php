<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Posts;
use App\Categories;

class postsManagementController extends Controller
{
  //
  public function all(){
    $posts = Posts::all();
    return view('admin.posts.list',['posts'=>$posts]);
  }
  public function getAdd(){
    $categories = Categories::all();
    return view('admin.posts.add',['categories'=>$categories]);
  }

  public function postAdd(Request $request){
    $posts = new Posts();

      $posts->title = $request->title;
      $posts->content = $request->content;
      $posts->category_id = $request->category_id;
      $posts->status = $request->status;
      $posts->summary = $request->summary;
      $posts->image = $request->file('image')->store('images');
      $posts->save();
      return redirect('admin/posts/all');
  }

  public function getEdit($id){
    $categories = Categories::all();
    $posts = Posts::find($id);
    return view('admin.posts.edit',['posts'=>$posts, 'categories'=>$categories]);
  }

  public function postEdit(Request $request, $id){
    $posts = Posts::find($id);

    $posts->title = $request->title;
    $posts->content = $request->content;
    $posts->category_id = $request->category_id;
    $posts->status = $request->status;
    $posts->summary = $request->summary;
    $posts->image = $request->file('image')->store('images');
    $posts->save();
    return redirect('admin/posts/all');
  }

  public function delete($id){
    $posts = Posts::find($id);
    $posts->delete();
    return redirect('admin/posts/all');

  }

}
