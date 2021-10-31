<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionUsersDownloadedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_users_downloaded', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('user_id');
            $table->bigInteger('book_id');
			$table->timestamps();
			$table->foreign('user_id')->references('id')->on('members');
			$table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('collection_users_downloaded', function (Blueprint $table) {
            //
        });
    }
}
