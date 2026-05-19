<?php

namespace App\Http\Controllers\Admin\GalleryManagement;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories=Category::all();

        return view('admin.gallery_management.category.index',compact('categories'));
    }


    public function create(){

        return view('admin.gallery_management.category.create');
    }
    public function store(Request $request){

        $request->validate([
            'name'=>'required',
        ]);
        $category=new Category();
        $category->name=$request->input('name');
        $category->save();

        return redirect()->route('category.index')->with('success','Category Created Successfully');
    }

    public function edit($id){

        $category=Category::find($id);

        return view('admin.gallery_management.category.edit',compact('category'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
        ]);
        $category=Category::findorfail($id);
        $category->name=$request->input('name');
        $category->save();

        return redirect()->route('category.index')->with('success','Category updated Successfully');
    }

    public function destroy($id){

        $category=Category::findorfail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success','Category deleted Successfully');

    }
}

