<?php

namespace App\Http\Controllers\Back\Stunting;

use App\Http\Controllers\Controller;
use App\Models\Stunting;
use Illuminate\Http\Request;

class DataStuntingController extends Controller
{
    public function get_data()
    {
        $stunting = Stunting::all();
        $compact = compact('stunting');
        return $compact;
    }

    public function update_data($request, $id)
    {
        $id->lila = $request->lila;
        $id->zs_bb_u = $request->zs_bb_u;
        $id->zs_tb_u = $request->zs_tb_u;
        $id->save();
        $id->ajuan()->first()->delete();
    }
}
