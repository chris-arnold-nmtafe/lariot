<?php

namespace App\Http\Controllers;

use App\Models\IoTSensorDatum;
use Illuminate\Http\Request;

class IoTDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sensors = IoTSensorDatum::all();
        return response()->json($sensors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(IoTSensorDatum $ioTSensorDatum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IoTSensorDatum $ioTSensorDatum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IoTSensorDatum $ioTSensorDatum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IoTSensorDatum $ioTSensorDatum)
    {
        //
    }
}
