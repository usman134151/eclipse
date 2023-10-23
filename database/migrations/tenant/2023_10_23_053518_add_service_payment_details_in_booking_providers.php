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
           Schema::table('booking_providers', function (Blueprint $table) {
            if (Schema::hasColumn('booking_providers', 'business_hours_override_price')) {
                $table->dropColumn('business_hours_override_price');
            }
            if (Schema::hasColumn('booking_providers', 'after_hours_override_price')) {
                $table->dropColumn('after_hours_override_price');
            }

            $table->json('service_payment_details')->nullable()->default(null);
            $table->json('additional_payments')->nullable()->default(null);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_providers', function (Blueprint $table) {
            //
        });
    }
};
