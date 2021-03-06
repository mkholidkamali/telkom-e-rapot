<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapots', function (Blueprint $table) {
            $table->id();   
            $table->foreignId('semester_id');

            $table->integer('rata_pengetahuan')->default(0);
            $table->integer('rata_ketrampilan')->default(0);
            $table->integer('rata_nilai_akhir')->default(0);
            $table->string('rata_predikat')->default(0);
            $table->text('catatan_akademik')->nullable();
            $table->integer('nilai_mapel_terendah')->default(0);
            $table->string('mapel_terendah')->default('');
            $table->integer('nilai_mapel_tertinggi')->default(0);
            $table->string('mapel_tertinggi')->default('');
            $table->integer('nis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapots');
    }
};
