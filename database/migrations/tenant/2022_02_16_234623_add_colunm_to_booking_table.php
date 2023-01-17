<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColunmToBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->enum('requester_information',[0,1])->after('service_type')->default('0')->comment("0 for no,1 for yes")->nullable();
            $table->text('contact_point')->nullable()->after('requester_information');
            $table->string('poc_phone','30')->nullable()->after('contact_point');
            $table->integer('company_id')->unsigned()->after('poc_phone')->nullable();
            $table->integer('customer_id')->unsigned()->after('company_id')->nullable();
            $table->integer('supervisor')->unsigned()->after('customer_id')->nullable();
            $table->text('billing_manager_id')->nullable()->after('supervisor');
            $table->enum('layout',[0,1])->default(0)->comment('0 for old,1 for new')->after('billing_manager_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
}
