<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'S001',
                'supplier_nama' => 'Mister mura',
                'supplier_alamat' => 'Jl. Ikan Mas',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'S002',
                'supplier_nama' => 'Kanna & Co',
                'supplier_alamat' => 'Jl. Ikan Hiu',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'S003',
                'supplier_nama' => 'Sinar Jaya',
                'supplier_alamat' => 'Jl. Ikan Koi',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
