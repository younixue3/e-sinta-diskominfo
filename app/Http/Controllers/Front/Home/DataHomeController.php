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
                'id_stunting' => $request->art,
                'isi' => $request->isi,
                'kk' => $filename_kk['filename'],
                'ktp' => $filename_ktp['filename']
            ]);
        }
        return $data;
    }
}
