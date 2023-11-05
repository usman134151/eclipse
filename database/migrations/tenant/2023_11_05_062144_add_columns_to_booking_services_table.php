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
            Schema::table('booking_services', function (Blueprint $table) {
                $table->integer('auto_assign')->default(0);
                $table->integer('auto_notify')->default(0);
            });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_services', function (Blueprint $table) {
            $table->dropColumn(['auto_assign', 'auto_notify']);
        });
    }
};
