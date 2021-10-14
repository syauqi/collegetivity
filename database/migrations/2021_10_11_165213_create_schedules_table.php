<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('nama_matkul', 96);
            $table->string('nama_dosen', 48);
            $table->string('waktu_mulai', 48);
            $table->string('waktu_selesai', 48);
            $table->string('hari', 16);
            $table->integer('sks', 16);
            $table->string('kelas', 16);
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
        Schema::dropIfExists('schedules_tables');
    }
}
