<?php

namespace App\Http\Controllers;

use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class ServiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = ServiceDetail::all();
        return view("backoffice.service_detail.all", compact("services"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.service_detail.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new ServiceDetail();

        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->service_id = 1;

        $service->save();

        return redirect()->route("service_detail.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceDetail  $serviceDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceDetail $serviceDetail)
    {
        return view("backoffice.service_detail", compact("serviceDetail"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceDetail  $serviceDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceDetail $serviceDetail)
    {
        return view("backoffice.service_detail.edit", compact("serviceDetail"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceDetail  $serviceDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceDetail $serviceDetail)
    {
        $serviceDetail->icon = $request->icon;
        $serviceDetail->title = $request->title;
        $serviceDetail->description = $request->description;
        $serviceDetail->service_id = 1;

        $serviceDetail->save();

        return redirect()->route("service_detail.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceDetail  $serviceDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceDetail $serviceDetail)
    {
        $serviceDetail->delete();

        return redirect()->back();
    }
}
