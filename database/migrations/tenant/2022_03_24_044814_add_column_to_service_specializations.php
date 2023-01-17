<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToServiceSpecializations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_specializations', function (Blueprint $table) {
            $table->json('specialization_price')->nullable()->after('specialization_id')->default(null)->change();
            $table->json('specialization_price_v')->nullable()->comment('virtual price')->after('specialization_price');
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
            //
        });
    }
}
