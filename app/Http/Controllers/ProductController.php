<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::whereNotNull('category_id')->get();
        return view('admin.product.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // print_r($request->category_id);die;
        $data = array(
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
        );
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = date('dmY') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/uploads"), $filename);
            $data['image'] = $filename;
        }
        $create = Product::create($data);
        return redirect()->route('product.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, Request $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);
        $categories = Category::whereNotNull('category_id')->get();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $id = $request->id;
        $data = array(
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id
        );
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = date('dmY') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/uploads"), $filename);
            $data['image'] = $filename;
        }
        $product = Product::find($id);
        $product->update($data);
        return redirect()->route('product.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.list');
        return response()->json("success");
    }

    public function extraDetails(Request $request)
    {
        $id = $request->id;
        $product=Product::where('id',$id)->with('ProductDetail')->first();  /// Productdetail relation called from Product model
        return view('admin.product.extraDetails', compact('id','product'));
    }

    public function extraDetailsStore(Request $request)
    {
        $id = $request->id;
        $data = array(
            'title' => $request->title,
            'total_items' => $request->total_items,
            'description' => $request->description,
            'product_id' => $id
        );
        ProductDetail::updateOrCreate(
            ['product_id' => $id],
            $data
        );
        return redirect()->route('product.list');
    }
}
