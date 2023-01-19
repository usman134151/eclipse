<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('coupon_name')->nullable();
            $table->string('coupon_code')->nullable();
            $table->string('coupon_description')->nullable();
            $table->string('discount')->nullable();
            $table->enum('discount_type',[1,2])->default(1)->comment('1 for percentage,2 for amount');
            $table->enum('type',[1,2])->default(1)->comment('1 for one time,2 for mutliple');
            $table->enum('status',[0,1])->default(1)->comment('1 for active,0 for inactive');
            $table->biginteger('added_by')->unsigned();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('coupons', function($table) {
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
        Schema::dropIfExists('coupons');
    }
}
