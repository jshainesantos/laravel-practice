<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product; 

class ProductController extends Controller
{
    //show product page
    public function index() {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('products.list', [
            'products' => $products
        ]);
    }

    //show create product page
    public function create() {
        return view('products.create');
    }

    //will store a product in db
    public function store(Request $request) {
        $rules = [
            'name'=> 'required|min:5',
            'price'=> 'required|numeric',
        ];

        if ($request-> image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }

        //save in db
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        if ($request-> image != "") {
            //will store images
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext; // unique name

            //save in products directory (uploads/products)
            $image->move(public_path('uploads/products'),$imageName);

            //save in db
            $product->image = $imageName;
            $product->save();
        }

        
        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }

    //show edit product page
    public function edit() {

    }

    //will update a product
    public function update() {

    }

    //will delete a product
    public function destroy() {

    }
}
