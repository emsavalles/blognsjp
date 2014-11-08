<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('posts', function(Blueprint $table) {
                    $table->increments('id');
                    $table->string('title');
                    $table->string('bajada');
                    $table->string('lugar');
                    $table->LongText('content');
                    $table->string('imagen');            
                    $table->string('pie');
                    $table->unsignedInteger('visible');
                    $table->timestamps();
                    $table->engine = 'MyISAM';
        });
        DB::statement('ALTER TABLE posts ADD FULLTEXT search(title, content)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::table('posts', function(Blueprint $table) {
            $table->dropIndex('search');
            $table->drop();
        });
	}

}
