<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //return the data from model
    public function index(){
        return view('product.products',
        [
            'title' => 'product',
            'heading' => 'shoope',
            'product' => product::all()
        ]
    );
    }
}