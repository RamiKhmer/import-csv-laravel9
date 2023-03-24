<?php

namespace App\Http\Controllers;

use App\Imports\MenusImport;
use App\Imports\UsersImport;
use App\Models\Menu;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MenuController extends Controller
{
   /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $menus = Menu::get();
  
        return view('menus', compact('menus'));
    }
        
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function export() 
    // {
    //     return Excel::download(new UsersExport, 'users.xlsx');
    // }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new MenusImport,request()->file('file'));
               
        return back();

    }
}
