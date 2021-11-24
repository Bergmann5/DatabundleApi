<?php

namespace App\Http\Controllers;

use App\Models\Bundles;
use Illuminate\Http\Request;
use App\Http\Resources\NetworkResource;
use App\Models\Packages;

class BundleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$bundles = Bundles::all();
        $bundles= Bundles::with('packages')->get();

        return NetworkResource::collection($bundles);
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
        $bundle = new Bundles();
        $bundle->title = $request->title;
        $bundle->networks_id=$request->networks_id;
        if($bundle->save())
        {
            return new NetworkResource($bundle);
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
        $bundle = Bundles::findOrFail($id);
        return new NetworkResource($bundle);
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
        $bundle = Bundles::findOrFail($id);
        $bundle->title = $request->title;
        $bundle->networks_id=$request->networks_id;
        if($bundle->save())
        {
            return new NetworkResource($bundle);
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
        $bundle = Bundles::findOrFail($id);
        if($bundle->delete())
        {
            return new NetworkResource($bundle);
        }
    }
}
