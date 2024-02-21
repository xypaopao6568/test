<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product_Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id',$user_id)->get();
        $sum = 0;
        $sum2 =0;
        foreach ($cart as $item){
           

            $sum += $item->quantity;
            $sum2 += $item->product->price * $item->quantity;

        } 


        $order = new Order();


        $order ->user_id = $user_id;
        $order ->status = 1;
        $order ->total_price = $sum2;
        $order -> commune = $request->input('xa');
        $order -> district = $request->input('huyen');
        $order -> city = $request->input('tinh');
        $order -> note = $request->input('note');
        $order->save();

        foreach ($cart as $item){
            $product = new Product_Order();
            $product->order_id = $order->id;
            $product->product_id = $item->product->id;
            $product->name = $item->product->name;
            $product->price = $item->product->price;
            $product->quantity = $item->quantity;
            $product->save();
        }

        foreach ($cart as $item){
            $item->delete();
        }
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
