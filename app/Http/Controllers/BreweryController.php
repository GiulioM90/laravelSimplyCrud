<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;

class BreweryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $breweries = Brewery::all();
        $breweries = Brewery::orderBy("created_at", "DESC")->paginate(2);
        return view("brewery.index", compact("breweries"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("brewery.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request -> all());

        Brewery::create([
            'name' => $request->name,
            'address' => $request->address,
            'description' => $request->description,
            'owner' => $request->owner,
            'site' => $request->site,
            'img' => $request->file('img')->store("public/img"),
        ]);
        return redirect(route("breweryIndex"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function show(Brewery $brewery)
    {
        return view("brewery.show",compact("brewery"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function edit(Brewery $brewery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brewery $brewery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brewery $brewery)
    {
        //
    }
}
