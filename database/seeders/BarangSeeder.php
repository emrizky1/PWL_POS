<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(table: 'm_barang')->delete();

        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'B001',
                'barang_nama' => 'nugget',
                'harga_beli' => 22000,
                'harga_jual' => 27000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'B002',
                'barang_nama' => 'sosis',
                'harga_beli' => 23000,
                'harga_jual' => 29000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'B003',
                'barang_nama' => 'sapu',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 3,
                'barang_kode' => 'B004',
                'barang_nama' => 'pel',
                'harga_beli' => 21000,
                'harga_jual' => 26000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1,
                'barang_kode' => 'B005',
                'barang_nama' => 'dimsum',
                'harga_beli' => 30000,
                'harga_jual' => 35000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'B006',
                'barang_nama' => 'shampoo',
                'harga_beli' => 18000,
                'harga_jual' => 22000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'B007',
                'barang_nama' => 'sabun cair',
                'harga_beli' => 25000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 2,
                'barang_kode' => 'B008',
                'barang_nama' => 'pasta gigi',
                'harga_beli' => 12000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'barang_kode' => 'B009',
                'barang_nama' => 'popok bayi',
                'harga_beli' => 55000,
                'harga_jual' => 65000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'B010',
                'barang_nama' => 'minyak telon',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 5,
                'barang_kode' => 'B011',
                'barang_nama' => 'mouse',
                'harga_beli' => 100000,
                'harga_jual' => 125000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 5,
                'barang_kode' => 'B012',
                'barang_nama' => 'keyboard',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 'B013',
                'barang_nama' => 'monitor',
                'harga_beli' => 1200000,
                'harga_jual' => 1500000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_kode' => 'B014',
                'barang_nama' => 'headset',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 'B015',
                'barang_nama' => 'kabel hdmi',
                'harga_beli' => 40000,
                'harga_jual' => 60000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
