<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolioCards = PortfolioCard::all();
        return view("backoffice.portfolio_card.all", compact("portfolioCards"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.portfolio_card.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolioCard = new PortfolioCard();

        $portfolioCard->title = $request->title;
        $portfolioCard->description = $request->description;
        $portfolioCard->image = $request->file("image")->hashName();
        $portfolioCard->categorie = $request->categorie;
        $portfolioCard->portfolio_id = 1;

        $portfolioCard->save();
        $request->file("image")->storePublicly("img", "public");

        return redirect()->route("portfolio_card.index");
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioCard  $portfolioCard
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioCard $portfolioCard)
    {
        return view("backoffice.portfolio_card.show", compact("portfolioCard"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioCard  $portfolioCard
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioCard $portfolioCard)
    {
        return view("backoffice.portfolio_card.edit", compact("portfolioCard"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioCard  $portfolioCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortfolioCard $portfolioCard)
    {
        Storage::disk("public")->delete("img/portfolio" . $portfolioCard->image);

        $portfolioCard->title = $request->title;
        $portfolioCard->description = $request->description;
        $portfolioCard->image = $request->file("image")->hashName();
        $portfolioCard->categorie = $request->categorie;
        $portfolioCard->portfolio_id = 1;

        $portfolioCard->save();
        $request->file("image")->storePublicly("img", "public");

        return redirect()->route("portfolio_card.index"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioCard  $portfolioCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioCard $portfolioCard)
    {
        Storage::disk("public")->delete("img/portfolio" . $portfolioCard->image);
        $portfolioCard->delete();
    }

    public function download($id)
    {
        $portfolioCard = PortfolioCard::find($id);
        Storage::disk("public")->download("img/portfolio" . $portfolioCard->image);
    }
}
