<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nodes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();;
			$table->string('display_name');
			$table->integer('threads')->default(0);
			$table->boolean('hide')->default(false);
			$table->timestamps();
			$table->softDeletes();
			$table->engine = 'InnoDB';
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nodes');
	}

}
