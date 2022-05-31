<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $service_titles = Schema::getColumnListing('services');
        $service_titles = array_slice($service_titles, 0,4);
        // dd($service_titles);

        return view('back.pages.services.all', compact('services', 'service_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services =  Service::all();
        return view('back.pages.services.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
			'logo' => 'required',
			'title' => 'required',
			'description' => 'required',
		]);

        $service = New Service;
        $service->logo = $request->logo;
        $service->title = $request->title;
        $service->description = $request->description;

        $service->save();
        return redirect()->route('services.index')->with("success", "Successfully Added");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        // dd($service);
        return view('back.pages.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('back.pages.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
			'logo' => 'required',
			'title' => 'required',
			'description' => 'required',
		]);

        $service->logo = $request->logo;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->updated_at = now();

        $service->save();
        return redirect()->route('services.index')->with("update", "Successfully Updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with("delete", "Successfully Deleted");
    }
}
