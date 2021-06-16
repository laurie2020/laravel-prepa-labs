<?php

namespace App\Http\Controllers;

use App\Models\FooterService;
use Illuminate\Http\Request;

class FooterServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footerServices = FooterService::all();

        return view("backoffice.footer_services.all", compact("footerServices"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.footer_services.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $footerService = new FooterService();

        $footerService->name = $request->name;
        $footerService->link = $request->link;
        $footerService->footer_id = 1;

        $footerService->save();

        return redirect()->route("footerService.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterService  $footerService
     * @return \Illuminate\Http\Response
     */
    public function show(FooterService $footerService)
    {
        return view("backoffice.footer_services.show", compact("footerService"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterService  $footerService
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterService $footerService)
    {
        return view("backoffice.footer_service.edit", compact("footerService"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterService  $footerService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FooterService $footerService)
    {
        $footerService->name = $request->name;
        $footerService->link = $request->link;
        $footerService->footer_id = 1;

        $footerService->save();

        return redirect()->route("footerService.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterService  $footerService
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterService $footerService)
    {
        $footerService->delete();
    }
}
