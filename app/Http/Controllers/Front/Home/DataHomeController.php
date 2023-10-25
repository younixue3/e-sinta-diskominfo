<?php

namespace App\Http\Controllers\Front\Home;

use App\Helper\getFilename;
use App\Http\Controllers\Controller;
use App\Models\Ajuan;
use App\Models\Art;
use App\Models\Stunting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataHomeController extends Controller
{
    public function get_data($request)
    {
        $search = wordwrap($request->nik, 4, '.', true) . '.';
        $art = Art::query()->where('nik' ,$search)->first();
        $stunting = Stunting::query()->where('nik', $request->nik)->first();
        $compact = compact('art', 'stunting');
        return $compact;
    }
    public function insert_ajuan($request)
    {
        $data = null;
        if ($request->has('art')) {
            $filename_ktp = getFilename::getFilename($request->ktp);
            Storage::disk('upload')->putFileAs('berkas_ajuan', $request->ktp, $filename_ktp['filename']);
            $filename_kk = getFilename::getFilename($request->kk);
            Storage::disk('upload')->putFileAs('berkas_ajuan', $request->ktp, $filename_kk['filename']);
            $data = Ajuan::create([
                'id_art' => $request->art,
                'isi' => $request->isi,
                'kk' => $filename_kk['filename'],
                'ktp' => $filename_ktp['filename']
            ]);
        } elseif ($request->has('stunting')) {
            $filename_ktp = getFilename::getFilename($request->ktp);
            Storage::disk('upload')->putFileAs('berkas_ajuan', $request->ktp, $filename_ktp['filename']);
            $filename_kk = getFilename::getFilename($request->kk);
            Storage::disk('upload')->putFileAs('berkas_ajuan', $request->ktp, $filename_kk['filename']);
            $data = Ajuan::create([
                'id_stunting' => $request->stunting,
                'isi' => $request->isi,
                'kk' => $filename_kk['filename'],
                'ktp' => $filename_ktp['filename']
            ]);
        }
        return $data;
    }
}
