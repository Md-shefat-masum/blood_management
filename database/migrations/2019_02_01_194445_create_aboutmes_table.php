<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutmes', function (Blueprint $table) {
            $table->increments('aboutme_id');
            $table->string('aboutme_slug',50)->nullable();
            $table->string('aboutme_heading',30)->nullable();
            $table->string('aboutme_photo',50)->nullable();
            $table->text('aboutme_details')->nullable();
            $table->string('aboutme_link',100)->nullable();
            $table->integer('aboutme_status')->default(1);
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
        Schema::dropIfExists('aboutmes');
    }
}
