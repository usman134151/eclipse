<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressInBookingLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_logs', function (Blueprint $table) {
          $table->enum('service_type',[1,2,3])->nullable()->comment('1 for In-person,2 for Virtual and 3 for Both')->after('service_category_id');
          $table->string('phone',20)->nullable()->after('specialization_id');
          $table->integer('physical_address_id')->nullable()->after('specialization_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_logs', function (Blueprint $table) {
            //
        });
    }
}
