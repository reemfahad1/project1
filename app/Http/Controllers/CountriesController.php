<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api;


class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'Country'=>'required|unique:apis',
            'CountryCode'=>'required|unique:apis',
            'Slug'=>'required|unique:apis',
            'NewConfirmed'=>'required|integer',
            'TotalConfirmed'=>'required|integer',
            'NewDeaths'=>'required|integer',
            'TotalDeaths'=>'required|integer',
            'NewRecovered'=>'required|integer',
            'TotalRecovered'=>'required|integer',
            
        ]);

        $api = New Api;
        $api->Country = $request->Country;
        $api->CountryCode = $request->CountryCode;
        $api->Slug = $request->Slug;
        $api->NewConfirmed = $request->NewConfirmed;
        $api->TotalConfirmed = $request->TotalConfirmed;
        $api->NewDeaths = $request->NewDeaths;
        $api->TotalDeaths = $request->TotalDeaths;
        $api->NewRecovered = $request->NewRecovered;
        $api->TotalRecovered = $request->TotalRecovered;

        $api->save();

        return redirect('list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showdata($id)
    {
        $data = Api::find($id);
        return view('editcountry',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([

            'NewConfirmed'=>'required|integer',
            'TotalConfirmed'=>'required|integer',
            'NewDeaths'=>'required|integer',
            'TotalDeaths'=>'required|integer',
            'NewRecovered'=>'required|integer',
            'TotalRecovered'=>'required|integer',
            
        ]);

        $data = Api::find($request->id);
        $data->Country = $request->Country;
        $data->CountryCode = $request->CountryCode;
        $data->Slug = $request->Slug;
        $data->NewConfirmed = $request->NewConfirmed;
        $data->TotalConfirmed = $request->TotalConfirmed;
        $data->NewDeaths = $request->NewDeaths;
        $data->TotalDeaths = $request->TotalDeaths;
        $data->NewRecovered = $request->NewRecovered;
        $data->TotalRecovered = $request->TotalRecovered;
        $data->save();

        return redirect('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
