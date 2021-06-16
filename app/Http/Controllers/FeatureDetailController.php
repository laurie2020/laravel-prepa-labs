<?php

namespace App\Http\Controllers;

use App\Models\FeatureDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feature_details = FeatureDetail::all();

        return view("backoffice.feature_detail.all", compact("feature_details"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.feature_details.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feature_detail = new FeatureDetail();

        $feature_detail->title = $request->title;
        $feature_detail->description = $request->description;
        $feature_detail->description_i = $request->description_i;
        $feature_detail->paragraphe1 = $request->paragraphe1;
        $feature_detail->paragraphe2 = $request->paragraphe2;
        $feature_detail->paragraphe3 = $request->paragraphe3;
        $feature_detail->image = $request->file("image")->hashName();
        $feature_detail->feature_id = 1;

        $feature_detail->save();
        $request->file("image")->storePublicly("img", "public");

        return redirect()->route("feature_detail.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeatureDetail  $featureDetail
     * @return \Illuminate\Http\Response
     */
    public function show(FeatureDetail $featureDetail)
    {
        return view("backoffice.feature_detail.show", compact("featureDetail"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeatureDetail  $featureDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(FeatureDetail $featureDetail)
    {
        return view("backoffice.feature_detail.edit", compact("featureDetail"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeatureDetail  $featureDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeatureDetail $featureDetail)
    {
        Storage::disk("public")->delete("img/" . $featureDetail->image);

        $featureDetail->title = $request->title;
        $featureDetail->description = $request->description;
        $featureDetail->description_i = $request->description_i;
        $featureDetail->paragraphe1 = $request->paragraphe1;
        $featureDetail->paragraphe2 = $request->paragraphe2;
        $featureDetail->paragraphe3 = $request->paragraphe3;
        $featureDetail->image = $request->file("image")->hashName();
        $featureDetail->feature_id = 1;

        $featureDetail->save();
        $request->file("image")->storePublicly("img", "public");

        return redirect()->route("feature_detail.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeatureDetail  $featureDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeatureDetail $featureDetail)
    {
        Storage::disk("public")->delete("img/" . $featureDetail->image);

        $featureDetail->delete();
    }

    public function download($id)
    {
        $featureDetail = FeatureDetail::find($id);

        Storage::disk("public")->download("img/" . $featureDetail->image);
    }
}
