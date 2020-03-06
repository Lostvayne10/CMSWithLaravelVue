<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');

            $table->string('name',128);
            $table->string('slug',128)->unique();

            $table->mediumText('excerpt')->nullable();
            $table->text('body');
            $table->enum('status',['PUBLISHED','DRAFT'])->default('DRAFT');

            $table->string('file',128)->nullable();

            $table->timestamps();

            //Relation

            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            
            $table->foreign('category_id')
                  ->references('id')->on('categories')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
