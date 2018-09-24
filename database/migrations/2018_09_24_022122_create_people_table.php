<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document_type', 3);
            $table->integer('document_number')->unique();
            $table->string('name', 60);
            $table->string('lastname', 60);
            $table->string('email', 50)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('address', 70)->nullable();
            $table->string('user', 2);
            $table->string('customer', 2);
            $table->string('provider', 2);
            $table->string('staff', 2);
            $table->boolean('state');
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
        Schema::dropIfExists('people');
    }
}
