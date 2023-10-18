<?php

namespace App\Imports;

use App\Models\Stunting;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StuntingImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Stunting([
            'nik' => $row['nik'],
            'nama' => $row['nama'],
            'jk' => $row['jk'],
            'ttl' => $row['ttl'],
            'nama_orang_tua' => $row['nama_orang_tua'],
            'posyandu' => $row['posyandu'],
            'alamat' => $row['alamat'],
            'usia_saat_ukur' => $row['usia_saat_ukur'],
            'tanggal_ukur' => $row['tanggal_ukur'],
            'berat' => $row['berat'],
            'tinggi' => $row['tinggi'],
            'lila' => $row['lila'],
            'bb_u' => $row['bb_u'],
            'zs_bb_u' => $row['zs_bb_u'],
            'tb_u' => $row['tb_u'],
            'zs_tb_u' => $row['zs_tb_u'],
            'bb_tb' => $row['bb_tb'],
            'zs_bb_tb' => $row['zs_bb_tb'],
            'naik_berat_badan' => $row['naik_berat_badan'],
            'pmt_diterima' => $row['pmt_diterima'],
            'jml_vit_a' => $row['jml_vit_a'],
            'kpsp' => $row['kpsp'],
            'kia' => $row['kia'],
        ]);
    }
}
