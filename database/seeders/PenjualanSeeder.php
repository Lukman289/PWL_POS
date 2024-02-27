<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "penjualan_id" => 1,
                "user_id" => 1,
                "pembeli" => "John Doe",
                "penjualan_kode" => "PJ-0001",
                "penjualan_tanggal" => "2024-02-27 08:00:00",
            ],
            [
                "penjualan_id" => 2,
                "user_id" => 2,
                "pembeli" => "Jane Smith",
                "penjualan_kode" => "PJ-0002",
                "penjualan_tanggal" => "2024-02-27 09:00:00",
            ],
            [
                "penjualan_id" => 3,
                "user_id" => 3,
                "pembeli" => "Alice Johnson",
                "penjualan_kode" => "PJ-0003",
                "penjualan_tanggal" => "2024-02-27 10:00:00",
            ],
            [
                "penjualan_id" => 4,
                "user_id" => 2,
                "pembeli" => "Bob Williams",
                "penjualan_kode" => "PJ-0004",
                "penjualan_tanggal" => "2024-02-27 11:00:00",
            ],
            [
                "penjualan_id" => 5,
                "user_id" => 3,
                "pembeli" => "Eve Brown",
                "penjualan_kode" => "PJ-0005",
                "penjualan_tanggal" => "2024-02-27 12:00:00",
            ],
            [
                "penjualan_id" => 6,
                "user_id" => 1,
                "pembeli" => "Charlie Davis",
                "penjualan_kode" => "PJ-0006",
                "penjualan_tanggal" => "2024-02-27 13:00:00",
            ],
            [
                "penjualan_id" => 7,
                "user_id" => 2,
                "pembeli" => "Grace Wilson",
                "penjualan_kode" => "PJ-0007",
                "penjualan_tanggal" => "2024-02-27 14:00:00",
            ],
            [
                "penjualan_id" => 8,
                "user_id" => 3,
                "pembeli" => "David Miller",
                "penjualan_kode" => "PJ-0008",
                "penjualan_tanggal" => "2024-02-27 15:00:00",
            ],
            [
                "penjualan_id" => 9,
                "user_id" => 1,
                "pembeli" => "Olivia Martinez",
                "penjualan_kode" => "PJ-0009",
                "penjualan_tanggal" => "2024-02-27 16:00:00",
            ],
            [
                "penjualan_id" => 10,
                "user_id" => 2,
                "pembeli" => "James Lee",
                "penjualan_kode" => "PJ-0010",
                "penjualan_tanggal" => "2024-02-27 17:00:00",
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
