<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id',$user_id)->get();
        $sum =0;
        $sum2 =0;
        foreach ($cart as $item){
            $sum += $item->quantity;
            $sum2 += $item->product->price * $item->quantity;
        } 
        return view('page.cart', compact('cart','sum','sum2'));
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
        $product = Product::all();
        $product2 = $request->input('idproduct');
        $quantity = $request->input('quantity');
        $user_id = Auth::user()->id;
        $cart = new Cart();
        $cart -> user_id = $user_id;
        $cart -> product_id = $product2;
        $cart -> quantity = $quantity;
        $cart -> save();
        return redirect() -> route('home');
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
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
