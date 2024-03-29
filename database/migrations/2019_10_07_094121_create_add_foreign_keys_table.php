<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('comments', function (Blueprint $table) {

        $table -> bigInteger('post_id') -> unsigned() -> index();
        $table -> foreign('post_id', 'post')
               -> references('id')
               -> on('posts');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('comments', function (Blueprint $table) {

        $table -> dropForeign('post');
        $table -> dropColumn('post_id');
      });
    }
}
