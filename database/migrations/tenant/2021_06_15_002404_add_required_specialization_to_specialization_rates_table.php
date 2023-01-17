<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRequiredSpecializationToSpecializationRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialization_rates', function (Blueprint $table) {
            $table->integer('required_specialization')->nullable()->comment('0= unrequired_specialization, 1= required_specialization')->after('accommodation_service_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialization_rates', function (Blueprint $table) {
            //
        });
    }
}
