<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FrequencyColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {

            $table->integer('parent_id')->default(0)->comment('booking primary key')->nullable();
            $table->tinyInteger('is_recurring')->default(0)->comment('0=no,1=recurring')->nullable();
            $table->date('recurring_start_at')->nullable();
            $table->date('recurring_end_at')->nullable();

        });
        Schema::table('booking_logs', function (Blueprint $table) {

            $table->tinyInteger('is_recurring')->default(0)->comment('0=no,1=recurring')->nullable();
            $table->date('recurring_start_at')->nullable();
            $table->date('recurring_end_at')->nullable();

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
