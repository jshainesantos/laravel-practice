<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function store() {

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
