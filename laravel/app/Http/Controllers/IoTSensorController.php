<?php

namespace App\Http\Controllers;

use App\Models\IoTSensor;
use Illuminate\Http\Request;

class IoTSensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sensors = IoTSensor::all();
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
    public function show(IoTSensor $ioTSensor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IoTSensor $ioTSensor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IoTSensor $ioTSensor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IoTSensor $ioTSensor)
    {
        //
    }
}
