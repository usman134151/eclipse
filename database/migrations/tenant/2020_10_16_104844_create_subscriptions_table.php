<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned();
            $table->integer('plan_id')->unsigned();
            $table->integer('sub_total');
            $table->integer('tax');
            $table->integer('total_price');
            $table->timestamps();
        });
        Schema::table('subscriptions', function($table) {
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('subscriptions', function($table) {
          $table->foreign('plan_id')->references('id')->on('subscription_plans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
