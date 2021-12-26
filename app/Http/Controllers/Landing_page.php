<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;
use App\Models\Api;

class Landing_page extends Controller
{
    //
    function loadView() {

        // get the data from Covid-19 Api
        $data = Http::get('https://api.covid19api.com/summary')->json();
        // get the data from CountryCoords Api
        $jsonString = json_decode(file_get_contents(base_path('/CountryCoords.json')), true);

        foreach($data['Countries'] as $index1 => $item){
            
            // Build an API route when the user hits it, it will get the data from a covid19 API and CountryCoords API
            // and insert or update (if country exists) all countries' data in the database.
        if (Api::where('Country', '=', $item['Country'])->count() == 0) {

        foreach($jsonString['ref_country_codes'] as $index2 => $item2){

                    if($item['CountryCode'] == $item2['alpha2']){
                    DB::table('apis')->insert(
                            ['Country' => $item['Country'],
                            'CountryCode' => $item['CountryCode'],
                            'Slug' => $item['Slug'],
                            'NewConfirmed' => $item['NewConfirmed'],
                            'TotalConfirmed' => $item['TotalConfirmed'],
                            'NewDeaths' => $item['NewDeaths'],
                            'TotalDeaths' => $item['TotalDeaths'],
                            'NewRecovered' => $item['NewRecovered'],
                            'TotalRecovered' => $item['TotalRecovered'],
                            'lat' => $item2['latitude'],
                            'lng' => $item2['longitude'],
                    ]);
                    }
                }
            }

        else{
            DB::table('apis')
            ->where('Country', $item['Country'])
            ->update([
                'NewConfirmed' => $item['NewConfirmed'],
                'TotalConfirmed' => $item['TotalConfirmed'], 
                'NewDeaths' => $item['NewDeaths'],
                'TotalDeaths' => $item['TotalDeaths'],
                'NewRecovered' => $item['NewRecovered'],
                'TotalRecovered' => $item['TotalRecovered']
            ]);
        }

            }

        $table_rows = DB::table('apis')->get()->toArray();
        return view("landing",["data"=>$data], ["table_rows"=>$table_rows]);
    }

    // use it with ajax to get the map markers
    function fetchCountries() {
        $Countries = Api::all();
        return response()->json([
            'countries' => $Countries,
        ]);
    }
    
}
