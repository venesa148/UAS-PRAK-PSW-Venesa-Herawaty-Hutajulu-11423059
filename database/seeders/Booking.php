<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Booking extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookings')->insert([
            'jenis_lapangan' => 'Lapangan Futsal',
            'tanggal_pemesanan' => '2024-04-20 09:00:00',
            'tanggal_selesai' => '2024-04-20 11:00:00',
            'nama_pemesan' => 'John Doe',
            'no_telp' => '081234567890'
        ]);
    }
}
