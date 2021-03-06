<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToProgramsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('programs', function(Blueprint $table)
		{
			//
			$table->decimal('years_stay')->nullable();
			$table->decimal('years_before_shift')->nullable();
			$table->decimal('years_before_drop')->nullable();
			$table->decimal('ave_batch_attrition')->nullable();
			$table->decimal('ave_batch_shift')->nullable();
			$table->decimal('ave_students')->nullable();
		});

	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('programs', function(Blueprint $table)
		{
			$table->dropColumn('years_stay');
			$table->dropColumn('years_before_shift');
			$table->dropColumn('years_before_drop');
			$table->dropColumn('ave_batch_attrition');
			$table->dropColumn('ave_batch_shift');
			$table->dropColumn('ave_students');
		});
	}

}
