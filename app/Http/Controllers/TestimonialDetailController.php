<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\TestimonialDetail;
use Illuminate\Http\Request;

class TestimonialDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonialDetails = TestimonialDetail::all();
        return view("backoffice.testimonial_detail.all", compact("testimonialDetails"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.testimonial_detail.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonialDetail = new TestimonialDetail();

        $testimonialDetail->text = $request->text;
        $testimonialDetail->testimonial_id = 1;

        $testimonialDetail->save();

        $personne = new Personne();

        $personne->lastname = $request->lastname;
        $personne->firstname = $request->firstname;
        $personne->profession = $request->profession;
        $personne->testimonial_detail_id = $testimonialDetail->id;

        $personne->save();

        return redirect()->route("testimonial_detail.index");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestimonialDetail  $testimonialDetail
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialDetail $testimonialDetail)
    {
        return view("backoffice.testimonial_detail.show", compact("testimonialDetail"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestimonialDetail  $testimonialDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(TestimonialDetail $testimonialDetail)
    {
        return view("backoffice.testimonial_detail.edit", compact("testimonialDetail"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestimonialDetail  $testimonialDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestimonialDetail $testimonialDetail)
    {
        $testimonialDetail->text = $request->text;
        $testimonialDetail->testimonial_id = 1;

        $testimonialDetail->save();

        return redirect()->route("testimonial_detail.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestimonialDetail  $testimonialDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestimonialDetail $testimonialDetail)
    {
        $testimonialDetail->delete();

        return redirect()->back();
    }
}
