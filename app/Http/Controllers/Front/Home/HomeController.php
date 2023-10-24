<?php

namespace App\Http\Controllers\Front\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\Home\DataHomeController as DataController;

class HomeController extends Controller
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
        $art = false;
        $stunting = false;
        $compact = compact('art', 'stunting');
        return view('Home.HomePage', $compact);
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
    public function show(Request $request)
    {
        $data = $this->data->get_data($request);
        return view('Home.HomePage', $data);
    }

    public function ajuan(Request $request)
    {
        $validator = $request->validate([
            'isi' => 'required',
            'ktp' => 'required|file|size:512|mimes:png,jpg,jpeg',
//            'kk' => 'required|file|size:512|mimes:png,jpg,jpeg',
        ]);
        dd();
//        dd($validated);
//        $data = $this->data->insert_ajuan($request);
//        return redirect(route('home'))->with('success', 'Update Data Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
