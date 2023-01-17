<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPlanPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_plan_permissions', function (Blueprint $table) {
            $table->id();
            $table->integer('sub_plan_id')->unsigned();
            $table->foreign('sub_plan_id')->references('id')->on('subscription_plans')->onDelete('cascade');
            $table->integer('total_bookings');
            $table->integer('total_providers');
            $table->integer('total_staff');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_plan_permissions');
    }
}
