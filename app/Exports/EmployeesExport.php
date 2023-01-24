<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class EmployeesExport implements FromCollection, WithHeadings, ShouldAutoSize, WithColumnFormatting, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Employee::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'Nomor Induk Pegawai',
            'Email',
            'Nomor KTP',
            'Nomor Pegawai Pendidikan',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Pendidikan',
            'Golongan Darah',
            'Tanggal Masuk',
            'Tanggal Keluar',
            'Instansi',
            'Jabatan',
            'Alamat',
            'Status',
            'Nomor Telepon',
            'Nama Ibu',
            'Nama Pasangan',
            'Nama Anak',
            'Foto',
            'Created At',
            'Updated At',
        ];
    }

    public function map($employee): array
    {
        return [
            $employee->id,
            $employee->name,
            $employee->institution_number,
            $employee->email,
            $employee->id_card,
            $employee->education_personnel_number,
            $employee->birth_place,
            $employee->birth_date,
            $employee->gender,
            $employee->education,
            $employee->blood_type,
            $employee->join_date,
            $employee->end_date,
            $employee->institution->name,
            $employee->position->name,
            $employee->address,
            $employee->status,
            $employee->phone_number,
            $employee->mother_name,
            $employee->partner_name,
            $employee->children_name,
            $employee->photo,
            $employee->created_at,
            $employee->updated_at,
        ];
    }

    public function columnFormats(): array
    {
        return [
            // number format remove comma
            'C' => NumberFormat::FORMAT_NUMBER,
        ];
    }
}
