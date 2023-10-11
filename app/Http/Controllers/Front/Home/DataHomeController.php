<?php

namespace App\Http\Controllers\Front\Home;

use App\Http\Controllers\Controller;
use App\Models\Art;
use Illuminate\Http\Request;

class DataHomeController extends Controller
{
    public function get_data($request)
    {
        $search = wordwrap($request->nik, 4, '.', true) . '.';
        $art = Art::query()->where('nik' ,$search)->first();
        $compact = compact('art');
        return $compact;
    }
}
