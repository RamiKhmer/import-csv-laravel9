<?php

namespace App\Http\Controllers;

use App\Imports\ProductImport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::get();
  
        return view('product', compact('products'));
    }
        

    public function import() 
    {
        Excel::import(new ProductImport,request()->file('file'));
               
        return back();

    }
}
