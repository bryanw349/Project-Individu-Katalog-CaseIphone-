<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case', function (Blueprint $table) {
            $table->bigIncrements('id'); // Kolom BIGINT auto increment dan primary key
            $table->string('tipeiphone', 60);
            $table->string('warna', 140);
            $table->integer('stok');
            $table->decimal('harga',15, 2);
            $table->string('gambar', 300);
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
        Schema::dropIfExists('case');
    }
}
