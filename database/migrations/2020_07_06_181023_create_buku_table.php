<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('penerbit_id');
            $table->string('gambar', 40)->nullable();
            $table->string('nama', 100);
            $table->string('penulis', 100)->nullable();
            $table->double('harga')->default(0);
            $table->smallInteger('tahun');
            $table->smallInteger('stok')->default(0);
            $table->string('isbn', 20)->unique();
            $table->smallInteger('jumlah_halaman')->default(0);
            $table->text('deskripsi')->nullable();
            $table->tinyInteger('publish');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
