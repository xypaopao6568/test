<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        $template = "admin.user.index";
        return view('admin.admin_home', compact ('user','template'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {
        $existingUser = User::where('email', $request->input('email'))->first();
        if ($existingUser) {
            // Email đã tồn tại, hiển thị thông báo lỗi
            return redirect()->back()->with('error', 'Email đã tồn tại trong hệ thống.');
        } else {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->address = $request->input('address');
            $user->phone = $request->input('phone');
            $user->password = $request->input('password');
            $user->role = $request->input('role');
            $user->save();
            return redirect()->route('admin.user')->with('success', 'Người dùng đã được thêm thành công!');
      }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.user');
    }
}
