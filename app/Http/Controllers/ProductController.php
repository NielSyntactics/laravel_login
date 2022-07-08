<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index() {
        $products = Product::with('photos')->get();
        return view('product.index')->with('products', $products);
    }

    public function create() {
        return view('product.create');
    }

    public function store(Request $request) {
        $product = Product::create($request->only(['name']));
        $photos = explode(',',$request->get('photos'));
        foreach($photos as $photo){
            Photo::create([
                'photoable_id'=> $product->id,
                'photoable_type'=> 'App\Models\product',
                'filename'=> $photo
            ]);
        }

        return redirect()->route('product.index');
    }
}
