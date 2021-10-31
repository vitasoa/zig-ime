<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
			$table->binary('photo')->nullable();
            $table->enum('titre', ["Docteur", "Madame", "Monsieur", "Professeur", "Maître"]);
            $table->string('prenom')->nullable();
            $table->string('nom');
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
			$table->string('adresse');
			$table->string('ville');
			$table->string('pays');
            $table->string('job')->nullable();
			$table->string('entreprise')->nullable();
			$table->enum('formation', ["Enseignant", "Doctorat", "Master", "Licence", "Autres"]);
            $table->unsignedInteger('promotion')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('email')->nullable();
            $table->string('siteweb')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
