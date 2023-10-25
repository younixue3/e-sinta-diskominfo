<?php

namespace App\Http\Controllers\Back\ART;

use App\Http\Controllers\Controller;
use App\Models\Art;
use Illuminate\Http\Request;

class DataARTController extends Controller
{
    public function get_data()
    {
        $art = Art::all();
        $compact = compact('art');
        return $compact;
    }

    public function update_data($request, $id)
    {
        $art = Art::find($id);
        $art->status_miskin = $request->status_miskin;
        $art->save();
        $art->ajuan()->first()->delete();
    }
}
