<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAysemIndexInStudenttermsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('studentterms', function(Blueprint $table)
		{
			//
			$table->index('aysem', 'aysem_index');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('studentterms', function(Blueprint $table)
		{
			//
			$table->dropIndex('aysem_index');
		});
	}

}
