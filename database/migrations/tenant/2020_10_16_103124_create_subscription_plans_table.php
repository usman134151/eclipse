<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recurring_period');
            $table->string('name');
            $table->string('price');
            $table->integer('sale_price')->nullable();
            $table->enum('status',[0,1])->default(0)->comment('1 for active,0 for inactive');
            $table->biginteger('added_by')->unsigned();
            $table->timestamps();
        });
        Schema::table('subscription_plans', function($table) {
          $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_plans');
    }
}
