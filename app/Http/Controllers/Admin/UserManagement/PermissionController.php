<?php

namespace App\Http\Controllers\Admin\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::get();
        return view('admin.user_management.Permission.index',compact('permissions'));
      
    }
    public function create()
    {
        return view('admin.user_management.Permission.create');
    }
    public function store(Request $request)
    {
        $request -> validate([
            'name' =>'required',
        ]);
        $input =[
            'name'=>$request->name,
        ];

        Permission::create($input);
        return redirect()->route('permission.index')->with('success','Permission created successfully');
    }
    public function edit($id)
    {
        $permissions = Permission::find($id);
        return view('admin.user_management.Permission.edit',compact('permissions'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $permission = Permission::findOrFail($id);

        $permission->update([
            'name'=>$request->name,
        ]);
        return redirect()->route('permission.index')->with('success','Permission updated successfully');
    }

    public function delete($id)
    {
        $permission = Permission::find($id);

        if (!$permission) {
            return redirect()->back()->with('error', 'Permission not found.');
        }

        $permission->delete();

        return redirect()->route('permission.index')->with('success','Permission deleted successfully');
    }
}
