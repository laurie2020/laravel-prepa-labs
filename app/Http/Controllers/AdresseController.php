<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use Illuminate\Http\Request;

class AdresseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adresses = Adresse::all();

        return view("backoffice.adresse.all", compact("adresse"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.adresse.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adresse = new Adresse();

        $adresse->street = $request->street;
        $adresse->city = $request->city;
        $adresse->country = $request->country;
        $adresse->contact_id = 1;
        $adresse->footer_id = 1;

        $adresse->save();

        return redirect()->route("adresse.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function show(Adresse $adresse)
    {
        return view("backoffice.adresse.show", compact("adresse"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function edit(Adresse $adresse)
    {
        return view("backoffice.adresse.edit", compact("adresse"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adresse $adresse)
    {
        $adresse->street = $request->street;
        $adresse->city = $request->city;
        $adresse->country = $request->country;
        $adresse->contact_id = 1;
        $adresse->footer_id = 1;

        $adresse->save();

        return redirect()->route("adresse.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adresse $adresse)
    {
        $adresse->delete();
    }
}
