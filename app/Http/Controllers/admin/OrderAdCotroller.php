<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product_Order;
use Illuminate\Http\Request;

class OrderAdCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $template = "admin.order.index";
        $order = Order::all();
        return view('admin.admin_home',compact('order','template'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $items = Order::find($id);
        
        $product = Product_Order::where('order_id', '=', "$id")->get();
        // dd($id, $product);
        $template = "admin.order.order_detail";
        return view('admin.admin_home', compact('items','template','product'));

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
