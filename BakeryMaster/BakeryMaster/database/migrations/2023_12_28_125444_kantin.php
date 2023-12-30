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
        Schema::create('kantin', function (Blueprint $table) {
            $table->id('id_kantin');
            $table->char('id_penjual');
            $table->char('nama_kantin');
            $table->char('nama_penjual');
            $table->char('no_telp');
            $table->double('saldo');
            $table->char('image_penjual');
            $table->char('image_kantin');
            $table->char('username');
            $table->char('password');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
