<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodDonnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_donners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30);
            $table->string('blood_group',5);
            $table->string('mobile_no',20);
            $table->string('email',50);
            $table->string('fb_address',300);
            $table->string('address',100);
            $table->string('website',20);
            $table->string('skype',100);
            $table->string('twitter',100);
            $table->string('linkedin',100);
            $table->string('donner_role',15);
            $table->string('last_donnet',50);
            $table->string('birth_date',50);
            $table->string('donner_image',100);
            $table->string('slug',25);
            $table->integer('donner_status')->default('1');
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
        Schema::dropIfExists('blood_donners');
    }
}
