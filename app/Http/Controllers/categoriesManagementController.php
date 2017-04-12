<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class categoriesManagementController extends Controller
{
    //
    public function all(){
      $categories = Categories::all();
      return view('admin.categories.list',['categories'=>$categories]);
    }

    public function getAdd(){
      return view('admin.categories.add');
    }

    public function postAdd(Request $request){
        $categories = new Categories;

        $categories->name = $request->name;
        $categories->description = $request->description;

        $categories->save();

        return redirect('admin/categories/all');
    }

    public function getEdit($id){
      $categories = Categories::find($id);
      return view('admin.categories.edit',['categories'=>$categories]);
    }

    public function postEdit(Request $request, $id){
      $categories = Categories::find($id);

      $categories->name = $request->name;
      $categories->description = $request->description;

      $categories->save();
      return redirect('admin/categories/all');
    }

    public function delete($id){
      $categories = Categories::find($id);
      
      $categories->delete();

      return redirect('admin/categories/all');
    }
}
