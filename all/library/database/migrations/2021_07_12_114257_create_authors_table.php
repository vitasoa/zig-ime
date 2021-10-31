<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
			$table->string('firstname')->nullable();
			$table->string('lastname');
			$table->string('phone')->nullable();
			$table->string('mobile')->nullable();
			$table->string('address_street')->nullable();
			$table->string('address_street2')->nullable();
			$table->string('address_city')->nullable();
			$table->string('address_country')->nullable();
			$table->string('address_zip')->nullable();
			$table->string('job')->nullable();
			$table->string('email')->unique();
			$table->string('website')->nullable();
			$table->string('facebook')->nullable();
			$table->string('linkedin')->nullable();
			$table->enum('civility', ['Mr', 'Mme', 'Mrs'])->default('Mr');
			$table->string('avatar')->nullable();
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
        Schema::dropIfExists('authors');
    }
}
