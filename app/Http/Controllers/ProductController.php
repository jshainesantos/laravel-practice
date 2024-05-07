<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
    //show product page
    public function index() {

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

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }
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
