<?php

namespace App\Http\Controllers\Back\ART;

use App\Http\Controllers\Controller;
use App\Models\art;
use Illuminate\Http\Request;
use App\Http\Controllers\Back\ART\DataARTController as DataController;

class ARTController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DataController $data)
    {
        $this->data = $data;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->data->get_data();
        return view('Dashboard.ART.index', $data);
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
    public function show(art $art)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(art $art)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, art $art)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(art $art)
    {
        //
    }
}
