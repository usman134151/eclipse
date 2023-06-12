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
        Schema::table('service_categories', function (Blueprint $table) {
            $table->integer('request_start_time')->nullable()->default(0);
            $table->integer('request_end_time')->nullable()->default(0);
            $table->integer('request_end_address')->nullable()->default(0);
            $table->integer('request_no_of_providers')->nullable()->default(0);
            $table->integer('request_service_consumer')->nullable()->default(0);
            $table->integer('request_participants')->nullable()->default(0);
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
            $table->dropColumn('request_start_time');
            $table->dropColumn('request_end_time');
            $table->dropColumn('request_end_address');
            $table->dropColumn('request_no_of_providers');
            $table->dropColumn('request_service_consumer');
            $table->dropColumn('request_participants');
        });
    }
};
