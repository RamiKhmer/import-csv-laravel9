<?php

namespace App\Http\Controllers;
use App\Imports\MenuCategoryImport;
use App\Models\MenuCategory;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{
   
       public function index()
    {
        $menuCates = MenuCategory::get();
  
        return view('menu-cate', compact('menuCates'));
    }


       public function import() 
    {
        Excel::import(new MenuCategoryImport,request()->file('file'));
               
        return back();

    }
}
