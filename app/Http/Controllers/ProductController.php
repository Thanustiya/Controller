<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

     function DatatableIndex()
    {

        $PropertyData = Product::all();
        return view ('Datatable',['Data'=> $PropertyData]);
        //return $PropertyData;
       
        
        //return DB::select('select * from data_source_x'); // read the data from 
      

    }

    
}
