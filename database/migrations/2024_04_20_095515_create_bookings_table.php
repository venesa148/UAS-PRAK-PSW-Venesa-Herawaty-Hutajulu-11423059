<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_lapangan', ['Lapangan Futsal', 'Lapangan Voly', 'Lapangan Basket', 'Lapangan Tenis Meja', 'Lapangan Bulutangkis', 'Lapangan Hijau', 'Lapangan Bebas']);
            $table->dateTime('tanggal_pemesanan');
            $table->dateTime('tanggal_selesai');
            $table->string('nama_pemesan');
            $table->bigInteger('no_telp');
            $table->timestamps();
            $table->enum('aksi', ['Approved', 'Disapproved'])->default('Disapproved');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
