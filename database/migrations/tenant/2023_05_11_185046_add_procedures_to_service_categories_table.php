<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProceduresToServiceCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->longText('check_in_procedure')->nullable()->default(null)->collation('utf8mb4_bin')->check('json_valid(`check_in_procedure`)');
            $table->longText('close_out_procedure')->nullable()->default(null)->collation('utf8mb4_bin')->check('json_valid(`close_out_procedure`)');
            $table->longText('running_late_procedure')->nullable()->default(null)->collation('utf8mb4_bin')->check('json_valid(`running_late_procedure`)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->dropColumn(['check_in_procedure', 'close_out_procedure', 'running_late_procedure']);
        });
    }
}