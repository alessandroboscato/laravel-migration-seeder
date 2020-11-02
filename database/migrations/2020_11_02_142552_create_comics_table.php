<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->string('author', 50);
            $table->string('editor', 50);
            $table->string('edition', 30);
            $table->year('year');
            $table->smallInteger('number');
            $table->smallInteger('pages')->nullable();
            $table->boolean('lecture', 3);
            $table->boolean('coloured')->default(true);
            $table->string('barcode', 14);
            $table->float('price', 6, 2);
            $table->string('cover');
            $table->text('text', 500);
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
        Schema::dropIfExists('comics');
    }
}
