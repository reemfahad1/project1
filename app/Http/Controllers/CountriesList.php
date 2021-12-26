<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;
use App\Models\Api;

class CountriesList extends Controller
{
    
    function loadView() {

        // get the Api DB 
        $table_rows = Api::sortable()->paginate(10);
        return view("list", ["table_rows"=>$table_rows]);
    }

    function search(Request $request)
    {
        // serach by country name
        if($request->isMethod('post')){
            $name = $request->get('country');
            $table_rows = Api::where('Country' , 'LIKE', '%'. $name .'%')->paginate(10);
        }
        return view("list", compact('table_rows'));

    }


}
