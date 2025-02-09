<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorieUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('categorie_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('judul_berita_ina')->nullable();
            $table->string('sluk')->nullable();
            $table->string('judul_berita_eng')->nullable();
            $table->string('slug')->nullable();
            $table->enum('trending', ['Y', 'N'])->default('N');
            $table->enum('headline', ['Y', 'N'])->default('N');
            $table->enum('aktif', ['Y', 'N'])->default('N');
            $table->text('isi_berita_ina')->nullable();
            $table->text('isi_berita_eng')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('jam')->nullable();
            $table->string('tag')->nullable();
            $table->string('gambar_berita')->nullable();
            $table->string('video')->nullable();
            $table->string('view')->nullable();
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
        Schema::dropIfExists('categorie_user');
    }
}
