<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article',function (Blueprint $table){
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article', function ($table){
            $table->dropForeign(['category_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
