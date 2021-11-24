<?php

namespace App\Http\Controllers;

use App\Models\Bundles;
use App\Models\Packages;
use Illuminate\Http\Request;
use App\Http\Resources\NetworkResource;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $packages = Packages::all();
        $bundles = Bundles::with('packages')->get();
        return NetworkResource::collection($packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package = new Packages();
        $package->volume = $request->volume;
        $package->Cost = $request->Cost;
        $package->bundles_id = $request->bundles_id;
        if($package->save())
        {
            return new NetworkResource($package);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = Packages::findOrFail($id);
        return new NetworkResource($package);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $package = Packages::findOrFail($id);
        $package->volume = $request->volume;
        $package->Cost = $request->Cost;
        $package->bundles_id = $request->bundles_id;
        if($package->save())
        {
            return new NetworkResource($package);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     $package = Packages::findOrFail($id);
        if($package->delete())
        {
            return new NetworkResource($package);
        }
    }
}
