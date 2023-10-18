<?php

namespace App\Http\Controllers;

use App\Imports\ArtImport;
use App\Imports\StuntingImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{
    public function importExport()
    {
        return view('import');
    }

    public function art_export()
    {
        return Excel::download(new ArtImport, 'art.xlsx');
    }

    public function art_import()
    {
        Excel::import(new ArtImport, request()->file('file'));

        return back();
    }

    public function stunting_import()
    {
        Excel::import(new StuntingImport(), request()->file('file'));

        return back();
    }
}
