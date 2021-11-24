<?php

namespace App\Http\Controllers;


use App\Models\Bundles;
use App\Models\Network;
use Illuminate\Http\Request;
use App\Http\Resources\NetworkResource;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $networks= Network::with('bundles')->get();
        return NetworkResource::collection($networks);
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
        $network = new Network();
        $network->name = $request->name;
        if($network->save())
        {
            return new NetworkResource($network);
        }
    }

   /* public function storebundle($id)
    {
        $network = Network::find($id);
        $bundle = new Bundles();
        $bundle->title = $request->title
        $network->bundles()->save($bundle);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $network = Network::findOrFail($id);
        return new NetworkResource($network);
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
        $network = Network::findOrFail($id);
        $network->name = $request->name;
        if($network->save())
        {
            return new NetworkResource($network);
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
        $network = Network::findOrFail($id);
        if($network->delete())
        {
            return new NetworkResource($network);
        }
    }

    public function render()
    {
        $networks = Network::all();
        return view("welcome", $networks);
    }
}
