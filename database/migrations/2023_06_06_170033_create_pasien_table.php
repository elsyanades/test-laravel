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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('id_pasien')->nullable();
			$table->string('nama_pasien')->nullable();
            $table->integer('telp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rt_rw')->nullable();
			$table->string('id_kelurahan')->nullable();
			$table->date('tanggal_lahir')->nullable();
			$table->string('jenis_kelamin')->nullable();
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
        Schema::dropIfExists('pasien');
    }
};
