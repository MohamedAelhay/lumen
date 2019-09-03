<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_title');
            $table->string('second_title');
            $table->text('content');
            $table->text('image');
            $table->unsignedBigInteger('author_id')->nullable();
            $table->timestamps();
        });
    }
}
