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
        Schema::create('detail_pesan', function (Blueprint $table) {
            $table->foreign('id_pesan')->references('id_pesan')->on('pesan');
            $table->foreign('id_kantin')->references('id_kantin')->on('kantin');
            $table->foreign('id_pembeli')->references('id_pembeli')->on('pembeli');
            $table->foreign('id_menu')->references('id_menu')->on('menu');
            $table->double('jumlah');
            $table->double('harga');
            $table->integer('total_harga');
            $table->date('tanggal_beli');
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
