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
		Schema::create('role_sections', function (Blueprint $table) {
			$table->id();
			$table->biginteger('system_role_id')->unsigned();
			$table->biginteger('section_right_id')->unsigned();
			$table->timestamps();
		});
		Schema::table('role_sections', function($table) {
			$table->foreign('system_role_id')->references('system_role_id')->on('system_roles')->onDelete('cascade');
			$table->foreign('section_right_id')->references('id')->on('section_rights')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('role_sections');
	}
};
