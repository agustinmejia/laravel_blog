<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->string('title', 255)->nullable();
            $table->text('subtitle')->nullable();
            $table->string('url', 255)->unique();
            $table->string('banner')->nullable();
            $table->string('tags')->nullable();
            $table->string('status')->nullable()->default('borrador');
            $table->smallInteger('order')->nullable()->default(1);
            $table->string('type')->nullable();
            $table->date('publish_date')->nullable();
            $table->smallInteger('views')->nullable()->default(0);
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
        Schema::dropIfExists('videos');
    }
}
