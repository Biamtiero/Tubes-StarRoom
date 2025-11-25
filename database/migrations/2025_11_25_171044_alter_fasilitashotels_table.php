<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('fasilitashotels', function (Blueprint $table) {
            $table->unsignedBigInteger('id_hotel')->change();
            $table->unsignedBigInteger('id_fasilitas')->change();

            $table->foreign('id_hotel')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('id_fasilitas')->references('id')->on('fasilitas')->onDelete('cascade');
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
