<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('BG', function(Blueprint $table)
		{
            $table->increments('id');
            $table->date('createdDate');
            $table->time('createdTime');
            $table->float('level');
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
		Schema::drop('BG');
	}

}
