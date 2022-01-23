<?php

namespace App\Http\Controllers;

use App\Models\Wallpapers;
use App\Http\Requests\StoreWallpapersRequest;
use App\Http\Requests\UpdateWallpapersRequest;

class WallpapersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWallpapersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWallpapersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wallpapers  $wallpapers
     * @return \Illuminate\Http\Response
     */
    public function show(Wallpapers $wallpapers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWallpapersRequest  $request
     * @param  \App\Models\Wallpapers  $wallpapers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWallpapersRequest $request, Wallpapers $wallpapers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wallpapers  $wallpapers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wallpapers $wallpapers)
    {
        //
    }
}
