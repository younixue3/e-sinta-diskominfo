<?php

namespace App\Imports;

use App\Models\Art;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ArtImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Art([
            'idbdt' => $row['idbdt'],
            'idartbdt' => $row['idartbdt'],
            'nama' => $row['nama'],
            'status_miskin' => $row['status_miskin'],
            'bpjs' => $row['bpjs'],
            'bantuan' => $row['bantuan'],
            'jenis_bantuan' => $row['jenis_bantuan'],
            'nik' => $row['nik'],
            'kk' => $row['kk'],
            'alamat' => $row['alamat'],
            'kecamatan' => $row['kecamatan'],
            'kelurahan' => $row['kelurahan'],
            'sls' => $row['sls'],
        ]);
    }
}
