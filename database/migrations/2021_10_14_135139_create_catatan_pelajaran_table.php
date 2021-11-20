<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanPelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_pelajaran', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('thumbnail')->nullable();
            $table->string('author');
            $table->string('matkul')->nullable();
            $table->mediumText('content');
            $table->string('tanggal');
            $table->string('user_id');
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
        Schema::dropIfExists('notes');
    }
}
