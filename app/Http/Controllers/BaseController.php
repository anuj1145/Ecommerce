<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BaseController extends Controller
{
    public function home()
    {
      $products=Product::get();
      $new_products=Product::limit(6)->latest()->get();
       return view('front.layout.home',compact('products','new_products'));
    }

    public function specialOffer()
    {
       return view('front.specialOffer');
    }

    public function delivery()
    {
       return view('front.delivery');
    }

    public function contact()
    {
       return view('front.contact');
    }

    public function cart()
    {
       return view('front.cart');
    }

    public function product_view(Request $request)
    {
      $id=$request->id;
      $product_details=Product::where('id',$id)->with('ProductDetail')->first(); //productDetail relation is used from Product model
      return view('front.product_view',compact('product_details'));
    }
}
