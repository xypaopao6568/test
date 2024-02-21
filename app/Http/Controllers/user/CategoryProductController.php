<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Category_Product;


class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $category2 = Category::all();
        $category = Category::where('id',$id)->get() ->first();

if ($category) {
    $productsInCategory = $category->category;
   
} else {
    // Xử lý khi không tìm thấy danh mục
    echo "Không tìm thấy danh mục.";
    }
    return view('page.list_category', compact('productsInCategory','category2'));
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
        
    }
}
