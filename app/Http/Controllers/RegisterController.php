<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('page.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
            $user->role = 0;
            $user->save();
            return redirect()->route('login')->with('success', 'Người dùng đã được thêm thành công!');
      }
    }


    public function storeadmin(Request $request) 
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
            return redirect()->route('login')->with('success', 'Người dùng đã được thêm thành công!');
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
    public function edit(string $id)
    {
        //
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
        //
    }
}
