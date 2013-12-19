<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsulinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('insulin', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('type');
            $table->float('carbDose')->nullable();
            $table->float('correctionDose')->nullable();
            $table->float('hourlyBasalDose')->nullable();
            $table->date('createdDate');
            $table->time('createdTime');
            $table->string('note')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('insulin');
	}

}
