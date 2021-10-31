<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTypeToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		\DB::statement("ALTER TABLE `lib_books` CHANGE `type` `type` ENUM('Article','Mémoire','Thèse','Revue') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'Article';");
		\DB::statement("UPDATE `lib_books` SET type = NULL;");
		\DB::statement("ALTER TABLE `lib_books` CHANGE `type` `type` ENUM('Article Presse','Article Académique','Livre','Mémoire et Thèse','Document Institutionnel','Revue') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'Mémoire et Thèse';");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            //
        });
    }
}
