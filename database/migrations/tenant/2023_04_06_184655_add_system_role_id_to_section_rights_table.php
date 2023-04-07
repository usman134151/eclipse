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
		Schema::table('section_rights', function (Blueprint $table) {
			$table->biginteger('system_role_id')->unsigned()->after('id');
		});
		Schema::table('section_rights', function($table) {
			$table->foreign('system_role_id')
				->references('system_role_id')
				->on('system_roles')
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('section_rights', function (Blueprint $table) {
			$table->dropForeign(['system_role_id']);
			$table->dropColumn('system_role_id');
		});
	}
};
