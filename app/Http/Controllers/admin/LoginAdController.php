<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginAdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login_admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = [   
        'email' => $request->input('email'),
        'password' => $request->input('password')
    ];

    if (Auth::attempt($data)) {
        $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập

        if ($user->role === 1) {
            // Xử lý cho vai trò 'admin'
            return redirect()->intended('/admin/home');
        } else {
            // Vai trò không hợp lệ
            Auth::logout(); // Đăng xuất nếu vai trò không phải là 'admin'
            return redirect()->intended('/loginad');
        }
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
