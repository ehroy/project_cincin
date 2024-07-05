<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $request){
        if($request->slug){
            $data = Product::where('slug' ,$request->slug);
        return (view('product.checkout.index',['data' => $data]));

        }else{
            $data = Product::paginate(3);
        return (view('app',['data' => $data]));
        }
    }

    public function index(){
        $data = Product::all();
        return (view('product.index',['data' => $data]));
    }
}
