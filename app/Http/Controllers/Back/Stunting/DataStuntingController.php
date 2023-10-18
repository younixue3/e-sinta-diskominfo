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
}
