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
		Schema::table('users', function (Blueprint $table) {
			if (!Schema::hasColumn('users', 'company_name')) {
				$table->string('company_name', 100)->nullable()->after('name');
			}
			if (!Schema::hasColumn('users', 'status')) {
				$table->tinyInteger('status')->nullable()->default(1)->comment('1 for Active, 0 for Inactive')->after('password');
			}
			if (!Schema::hasColumn('users', 'added_by')) {
				$table->integer('added_by')->nullable()->after('status');
			}
			if (!Schema::hasColumn('users', 'updated_by')) {
				$table->integer('updated_by')->nullable()->after('added_by');
			}
			if (!Schema::hasColumn('users', 'deleted_by')) {
				$table->integer('deleted_by')->nullable()->after('updated_by');
			}
			if (!Schema::hasColumn('users', 'security_token')) {
				$table->string('security_token')->nullable()->after('deleted_by');
			}
			if (!Schema::hasColumn('users', 'deleted_at')) {
				$table->softDeletes()->after('remember_token');
			}
			if (!Schema::hasColumn('users', 'email_verified_at')) {
				$table->timestamp('email_verified_at')->nullable()->after('email');
			}
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function (Blueprint $table) {
			$table->dropColumn('company_name');
			$table->dropColumn('status');
			$table->dropColumn('added_by');
			$table->dropColumn('updated_by');
			$table->dropColumn('deleted_by');
			$table->dropColumn('security_token');
			$table->dropColumn('deleted_at');
			$table->dropColumn('email_verified_at');
		});
	}
};
