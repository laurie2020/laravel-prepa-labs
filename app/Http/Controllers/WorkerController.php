<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Facade\Ignition\Exceptions\ViewException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers = Worker::all();

        return view("backoffice.worker.all", compact("workers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.worker.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $worker = new Worker();

        $worker->lastname = $request->lastname;
        $worker->firstname = $request->firstname;
        $worker->poste = $request->poste;
        $worker->photo = $request->file("photo")->hashName();
        $worker->team_id = 1;

        $worker->save();
        $request->file("photo")->storePublicly("img/team" . $worker->photo);

        return redirect()->route("worker.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        return view("backoffice.worker.show", compact("worker"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        return view("backoffice.worker.edit", compact("worker"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        Storage::disk("public")->delete("img/team" . $worker->photo);

        $worker->lastname = $request->lastname;
        $worker->firstname = $request->firstname;
        $worker->poste = $request->poste;
        $worker->photo = $request->file("photo")->hashName();
        $worker->team_id = 1;

        $worker->save();
        $request->file("photo")->storePublicly("img/team" . $worker->photo);

        return redirect()->route("worker.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        $worker->delete();
    }

    public function download($id)
    {
        $worker = Worker::find($id);
        Storage::disk("public")->delete("img/team" . $worker->photo);

        return redirect()->back();
    }
}
