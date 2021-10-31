<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
			$table->rememberToken();
			$table->string('profile_photo')->nullable();
			$table->string('adresse')->nullable();
			$table->string('complement_adresse')->nullable();
			$table->string('code_postal')->nullable();
			$table->string('city')->nullable();
			$table->string('country')->nullable();
			$table->string('site_web')->nullable();
            $table->string('phone')->nullable();
			$table->string('mobile')->nullable();
			$table->string('facebook')->nullable();
			$table->string('linkedin')->nullable();
			$table->string('twiteer')->nullable();
			$table->string('courriel')->nullable();
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
        Schema::dropIfExists('members');
    }
}
