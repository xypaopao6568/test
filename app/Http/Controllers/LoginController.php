<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use function Laravel\Prompts\info;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('page.login');
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
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ];
        if(Auth::attempt($data)){
            $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
            if ($user->role === 0) {
               
                // Xử lý cho vai trò 'user'
                info('Package installed successfully.');
                return redirect()->intended('/');
            } else {
                // Vai trò không hợp lệ
                Auth::logout(); // Đăng xuất nếu vai trò không phải là 'user'
                info('Package installed successfully.');
                return redirect()->intended('/login');
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
    public function logout()
    {
    Auth::logout(); // Đăng xuất người dùng
    return redirect('/')->with('success', 'Đăng xuất thành công!');
    }
}
