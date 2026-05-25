<?php

namespace App\Exports;

use App\Models\Inquiry;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InquiriesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Inquiry::select('id', 'created_at', 'name', 'email', 'company', 'subject', 'status', 'message')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Tanggal Masuk',
            'Nama Pemohon',
            'Email',
            'Perusahaan/Instansi',
            'Subjek',
            'Status',
            'Pesan/Spesifikasi',
        ];
    }
}
