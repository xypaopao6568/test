<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Category_Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $template = "admin.product.index";
        $product = Product::all();
        return view('admin.admin_home', compact('template','product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.product.add', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storagePath = public_path('uploads');
        echo $storagePath;
        if ($request->hasFile('image')) {
            $avatar = $request->file('image');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('uploads'), $fileName);
        } else {
            $fileName = null; // Đảm bảo biến $fileName được định nghĩa dù có tải lên tệp ảnh hay không
        }

        $product = new Product();   
        $category = $request->input('category');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->sale = $request->input('sale');
        $product->unit = $request->input('unit');
        $product->quantity = $request->input('quantity');
        $product->description = $request->input('description');
        $product->image = $fileName;
        $product->save();
        $product ->product()->sync($category);

        return redirect()->route('admin.products');
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
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $product = Product::find($id);

        $storagePath = public_path('uploads');
        echo $storagePath;
        if ($request->hasFile('image')) {
            $avatar = $request->file('image');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('uploads'), $fileName);
        } else {
            $fileName = null; // Đảm bảo biến $fileName được định nghĩa dù có tải lên tệp ảnh hay không
        }

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->sale = $request->input('sale');
        $product->unit = $request->input('unit');
        $product->quantity = $request->input('quantity');
        $product->description = $request->input('description');
        $product->image = $fileName;    
        $product->save();
        return redirect()->route('admin.products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product_category = Category_Product::where('product_id', $id)->first();
        
        if ($product_category) {
            $product_category->delete();
        }

        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.products');
    }

    public function search(Request $request)
    {
        $category2 = Category::all();
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%$query%")->get();
        return view('page.search', compact('products','category2'));
        
    }
}

