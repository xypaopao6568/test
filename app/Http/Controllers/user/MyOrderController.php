<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Order;
use Illuminate\Support\Facades\Auth;

class MyOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        $product = Product::all();
        $user = Auth::user()->id;
        $order = Order::where('user_id', $user)->with('product')->get();

        foreach ($order as $item) {
            
            $product = Product_Order::where('order_id', $item->id)->get();
            // dd($product);
        }

        // dd($order);
        return view('page.my_order', compact('order','category','product'));
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
        $category = Category::all();
        $detail = Product::find($id);
        return view('page.detail', compact('detail','category'));
    }

    // public function showofcate(int $id)
    // {   
    //     $listofcate = Product::find($id);
    //     return view('page.detail', compact('detail'));
    // }
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
