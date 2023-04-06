<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('section_rights', function (Blueprint $table) {
			$table->id();
			$table->biginteger('section_id')->unsigned();
			$table->biginteger('right_id')->unsigned();
			$table->timestamps();
		});
		Schema::table('section_rights', function($table) {
			$table->foreign('section_id')->references('id')->on('system_sections')->onDelete('cascade');
			$table->foreign('right_id')->references('id')->on('rights')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('section_rights');
	}
};
