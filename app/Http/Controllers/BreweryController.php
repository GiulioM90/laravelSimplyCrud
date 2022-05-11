<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BreweryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->except('index');
    } 
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
        $beers = Beer::all();
        return view("brewery.create", compact("beers"));
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
        // Brewery::create([
            $brewery = Auth::user()->breweries()->create([
            'name' => $request->name,
            'address' => $request->address,
            'description' => $request->description,
            'user_id' =>Auth::user()->id,
            'site' => $request->site,
            'img' => $request->file('img')->store("public/img"),
        ]);
        $brewery->beers()->attach($request->beers);
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
        $brewery->beers()->detach();
        $brewery->user()->disassociate();
        $brewery->delete();
        return redirect(route("breweryIndex"));
    }
}
