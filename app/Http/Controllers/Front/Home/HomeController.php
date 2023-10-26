<?php

namespace App\Http\Controllers\Front\Home;

use App\Http\Controllers\Controller;
use Validator;
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
        if ($data['art'] && $data['stunting']) {
            return view('Home.HomePage', $data);
        } else {
            session()->flash('message', 'Data tidak ditemukan');
            return view('Home.HomePage', $data);
        }
    }

    public function ajuan(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'kk' => ['required', 'file', 'size:500', 'mimes:jpeg,jpg,webp,png', 'dimensions: max_width = 2464, max_height = 2464', 'max: 5000'],
            'ktp' => ['required', 'file', 'size:500', 'mimes:jpeg,jpg,webp,png', 'dimensions: max_width = 2464, max_height = 2464', 'max: 5000'],
            'isi' => ['required', 'max: 350'],
        ]);
        if ($validator->fails()) {
            return redirect(route('home'))->withErrors($validator);
        } else {
            $data = $this->data->insert_ajuan($request);
            return redirect(route('home'))->with('success', 'Update Data Successfully');
        }
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
