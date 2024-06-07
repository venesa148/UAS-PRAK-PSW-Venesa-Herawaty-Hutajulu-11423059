<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courts', function (Blueprint $table) {
            $table->id();
            $table->enum('nama', ['Balige', 'Samosir', 'Jakarta', 'Medan', 'Sitoluama', 'Pekan Baru', 'Silaen']);
            $table->enum('title', ['Lapangan Futsal', 'Lapangan Voly', 'Lapangan Basket', 'Lapangan Tenis Meja', 'Lapangan Bulutangkis', 'Lapangan Hijau', 'Lapangan Bebas']);
            // $table->string('title');
            $table->double('price');
            // $table->string('court_code')->unique();
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courts');
    }
}
