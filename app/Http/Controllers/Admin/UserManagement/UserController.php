<?php

namespace App\Http\Controllers\Admin\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        // $user = User::orderBy('created_at', 'ASC')->get();
        $user = User::where('id', '!=', 1)->orderBy('created_at', 'ASC')->get();
        $superAdminRole = Role::where('name', 'Super Admin')->first();

        return view('admin.user_management.user.index', compact('user'));
    }
    public function create()
    {

        // $branches = Branch::get(["branch"]);
        $roles = Role::pluck('name', 'name')->all();
        return view('admin.user_management.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            // 'last_name' => 'required|regex:/^[A-Za-z ]+$/',
            'email' => 'required|unique:users',
            // 'mobile' => 'required|digits:10',
            'password' => 'required|same:confirm_password',
            'confirm_password' => 'required|same:password',
            'roles' => 'required|array',
            // 'images' => 'image|mimes:jpeg,png,jpg,gif|max:200000',
        ]);

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);
        $input['type'] = 'admin';

        // if ($request->hasFile('image')) {
        //     $filename = $request->file('image')->store('Profile Images', 'public');
        //     $input['profile_photo_path'] = $filename;
        // }

        $user = User::create($input);

        // Assign each role to the user
        foreach ($request->input('roles') as $roleName) {
            $role = Role::where('name', $roleName)->first();
            $user->assignRole($role);
        }

        return redirect()->route('user.index')
            ->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);

        $roles = Role::pluck('name', 'name')->all();

        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('admin.user_management.user.edit', compact('user', 'roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'nullable',
            'roles' => 'required', // Ensure the role is selected
            'status' => 'required',
        ]);

        try {
            $input = $request->except(['password']); // Avoid overwriting the password unless provided

            // Find the user by ID
            $user = User::findOrFail($id);

            // Update user details
            $user->update($input);

            // Remove existing roles and assign the new role
            DB::table('model_has_roles')->where('model_id', $id)->delete();
            $user->assignRole($request->input('roles'));

            return redirect()->route('user.index')->with('success', 'User updated successfully');
        } catch (\Spatie\Permission\Exceptions\RoleDoesNotExist $e) {
            // Specific exception for invalid roles
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['roles' => 'The selected role does not exist.']);
        } catch (\Exception $e) {
            // General exception for unexpected errors
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['general' => 'Something went wrong. Please try again.']);
        }
    }
    public function delete(string $id)
    {
        $user = User::find($id);

        $user->delete();

        if ($user) {

            return redirect()->route('user.index')
                ->with('success', 'User deleted successfully');
        }

        return back()->with('failure', 'Please try again');
    }
}
