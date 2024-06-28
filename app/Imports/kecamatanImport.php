<?php

namespace App\Imports;

use App\Models\KecamatanModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

class KecamatanImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            // 'IPILO' => new SheetImport(),
            // 'PADEBUOLO' => new SheetImport(),
            // 'DULALOWO TIMUR' => new SheetImport(),
            'PAGUYAMAN' => new SheetImport(),
            // 'HELEDULAA SELATAN' => new SheetImport(),
            // 'MOODU' => new SheetImport(),
            // 'TAMALATE' => new SheetImport(),
            // 'WUMIALO' => new SheetImport(),
            // 'LILUWO' => new SheetImport(),
            // 'MOLOSIPAT  U' => new SheetImport(),
            // 'BULOTADAA BARAT' => new SheetImport(),
            // 'LEATO UTARA' => new SheetImport(),
            // 'LEATO SELATAN' => new SheetImport(),
            // 'TALUMOLO' => new SheetImport(),
            // 'DEMBE I' => new SheetImport(),
            // 'DEMBE II' => new SheetImport(),
            // 'LEKOBALO' => new SheetImport(),
            // 'MOLOSIPAT W' => new SheetImport(),
            // 'BULADU' => new SheetImport(),
            // 'BIAWAO' => new SheetImport(),
            // 'LIMBA U' => new SheetImport(),
            // 'BIAWU' => new SheetImport(),
            // 'SIENDENG' => new SheetImport(),
            // 'DONGGALA' => new SheetImport(),
            // 'TENDA' => new SheetImport(),
            // 'POHE' => new SheetImport(),
            // 'TANJUNG KRAMAT' => new SheetImport(),
            // 'BULOTADAA TIMUR' => new SheetImport(),
            // 'TAPA' => new SheetImport(),
            // 'DULOMO UTARA' => new SheetImport(),
            // 'PILOLODAA' => new SheetImport(),
            // 'TANGGIKIKI' => new SheetImport(),
            // 'BULIIDE' => new SheetImport(),
            // 'TENILO' => new SheetImport(),
            // 'PULUBALA' => new SheetImport(),
            // 'DULALOWO' => new SheetImport(),
            // 'HELEDULAA UTARA' => new SheetImport(),
            // 'TOMULABUTAO SELATAN' => new SheetImport(),
            // 'TULADENGGI' => new SheetImport(),
            // 'TOMULABUTAO' => new SheetImport(),
            // 'LIBUO' => new SheetImport(),
            // 'HUANGOBOTU' => new SheetImport(),
            // 'LIMBA B' => new SheetImport(),
            // 'LIMBA U II' => new SheetImport(),
            // 'LIMBA U I' => new SheetImport(),
            // 'WONGKADITI BARAT' => new SheetImport(),
            // 'WONGKADITI TIMUR' => new SheetImport(),
            // 'DULOMO SELATAN' => new SheetImport(),
            // 'DEME JAYA' => new SheetImport(),
            // 'BOTU' => new SheetImport(),



            // Add other sheet names here as needed
        ];
    }
}


class SheetImport implements ToModel, WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        // Membuat nilai default untuk setiap kolom yang mungkin kosong
        $noHak = !empty($row[1]) ? $row[1] : '-';
        $suratUkur = !empty($row[2]) ? $row[2] : '-';
        $tipeHak = !empty($row[3]) ? $row[3] : '-';
        $provinsi = !empty($row[4]) ? $row[4] : '-';
        $kabupaten = !empty($row[5]) ? $row[5] : '-';
        $kecamatan = !empty($row[6]) ? $row[6] : '-';
        $kelurahan = !empty($row[9]) ? $row[9] : '-';
        $rak = !empty($row[10]) ? $row[10] : '-';
        $baris = !empty($row[11]) ? $row[11] : '-';
        $kolom = !empty($row[12]) ? $row[12] : '-';
        $bundle = !empty($row[13]) ? $row[13] : '-';

        // Membuat model dengan data yang valid
        return new KecamatanModel([
            'id' => (string) Str::uuid(),
            'no_hak' => $noHak,
            'surat_ukur' => $suratUkur,
            'tipe_hak' => $tipeHak,
            'provinsi' => $provinsi,
            'kabupaten' => $kabupaten,
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'rak' => $rak,
            'baris' => $baris,
            'kolom' => $kolom,
            'bundle' => $bundle,
        ]);
    }
}
