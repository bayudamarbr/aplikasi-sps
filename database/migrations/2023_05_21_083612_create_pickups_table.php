<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pickups', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id');
            $table->string('kategori_sampah');
            $table->string('alamat');
            $table->string('catatan');
            $table->string('jenis_pickup');
            $table->string('pembayaran')->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pickups');
    }
};
