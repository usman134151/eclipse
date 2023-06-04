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
        Schema::table('service_specializations', function (Blueprint $table) {
            $table->longText('specialization_price_p')->nullable();
            $table->longText('specialization_price_t')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_specializations', function (Blueprint $table) {
            $table->dropColumn('specialization_price_p');
            $table->dropColumn('specialization_price_t');
        });
    }
};
