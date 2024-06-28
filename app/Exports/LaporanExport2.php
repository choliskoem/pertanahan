<?php

namespace App\Exports;

use App\Models\pinjambukutanah;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class LaporanExport2 implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $data;

    public function __construct()
    {
        //
        $this->data =   pinjambukutanah::select(
            'pinjambukutanahs.id_pinjam',
            'pinjambukutanahs.provinsi',
            'pinjambukutanahs.kabupaten',
            'kecamatan.kecamatan',
            'kelurahan.kelurahan',
            'pinjambukutanahs.no_su',
            'pinjambukutanahs.tipe_hak',
            'pinjambukutanahs.no_hak',
            'pinjambukutanahs.jenis',
            'pinjambukutanahs.pelayanan',
            'pinjambukutanahs.rak',
            'pinjambukutanahs.baris',
            'pinjambukutanahs.kolom',
            'pinjambukutanahs.bundle',
            'pinjambukutanahs.keterangan',
            'pinjambukutanahs.waktu_dipinjam',
            'pinjambukutanahs.status'
        )
            ->leftJoin('kelurahan', 'kelurahan.id_kelurahan', '=', 'pinjambukutanahs.id_kelurahan')
            ->leftJoin('kecamatan', 'kecamatan.id_kecamatan', '=', 'kelurahan.id_kecamatan')
            ->where('pinjambukutanahs.status', 'Arsip Dikirim')
            ->get();
    }

    public function collection()
    {
        return $this->data;
    }

    public function headings(): array
    {
        return [
            'Provinsi',
            'Kabupaten',
            'Kecamatan',
            'Kelurahan',
            'No. SU',
            'Tipe Hak',
            'No. Hak',
            'Jenis',
            'Pelayanan',
            'Rak',
            'Baris',
            'Kolom',
            'Bundle',
            'Keterangan',
            'Waktu Dipinjam',
            'Status',
        ];
    }

    public function map($laporan): array
    {
        return [
            $laporan->provinsi,
            $laporan->kabupaten,
            $laporan->kecamatan,
            $laporan->kelurahan,
            $laporan->no_su,
            $laporan->tipe_hak,
            $laporan->no_hak,
            $laporan->jenis,
            $laporan->pelayanan,
            $laporan->rak,
            $laporan->baris,
            $laporan->kolom,
            $laporan->bundle,
            $laporan->keterangan,
            $laporan->waktu_dipinjam,
            $laporan->status,
        ];
    }
    public function styles(Worksheet $sheet)
    {
        // Determine the last row
        $lastRow = $this->data->count() + 1; // +1 for the header row

        // Apply styles dynamically
        $sheet->getStyle("A1:P1")->applyFromArray([
            'font' => ['bold' => true],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FFFF00'],
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ]);

        $sheet->getStyle("A1:P{$lastRow}")->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ]);
    }
}
