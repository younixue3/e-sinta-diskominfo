<?php

namespace App\Http\Controllers\Front\Home;

use App\Http\Controllers\Controller;
use App\Models\Art;
use App\Models\Stunting;
use Illuminate\Http\Request;

class DataHomeController extends Controller
{
    public function get_data($request)
    {
        $search = wordwrap($request->nik, 4, '.', true) . '.';
        $art = Art::query()->where('nik' ,$search)->first();
        $stunting = Stunting::query()->where('nik', $search)->first();
        $implode = null;
        if ($art) {
            $explode = explode(' ', $art->nama);
            foreach ($explode as $key => $item) {
                $result = str_split($item)[0] . str_split($item)[1];
//            dd(count(str_split($item)));
                for ($i = 2; $i < count(str_split($item)); $i++) {
                    $result = $result . '*';
                }
                $explode[$key] = $result;
            }
            $implode = implode(' ', $explode);
        } elseif ($stunting) {
            $explode = explode(' ', $stunting->nama);
            foreach ($explode as $key => $item) {
                $result = str_split($item)[0] . str_split($item)[1];
//            dd(count(str_split($item)));
                for ($i = 2; $i < count(str_split($item)); $i++) {
                    $result = $result . '*';
                }
                $explode[$key] = $result;
            }
            $implode = implode(' ', $explode);
        }
        $nama = $implode;
        $compact = compact('art', 'stunting', 'nama');
        return $compact;
    }
}
