<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_proyek', 255)->nullable();
            $table->string('deskripsi_proyek', 255)->nullable();
            $table->date('tanggal_mulai_proyek');
            $table->date('tanggal_deadline_proyek');
            $table->boolean('status_proyek');
            $table->unsignedBigInteger('manager_id');
            $table->foreign('manager_id')->references('id_mgr')->on('manager');
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
        Schema::dropIfExists('project');
    }
}
