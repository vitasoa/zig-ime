<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('image')->nullable();
			$table->string('book_file');
			$table->integer('total_page')->nullable();
			$table->integer('rating')->nullable();
			$table->string('isbn')->nullable();
			$table->date('published_date')->nullable();
			$table->enum('lang', ['Fr', 'En', 'Others'])->default('Fr');
			$table->text('commentary')->nullable();
			$table->text('topic')->nullable();
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
        Schema::dropIfExists('books');
    }
}
