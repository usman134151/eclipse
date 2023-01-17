<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToBookingDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_documents', function (Blueprint $table) {
            $table->text('permissions')->nullable()->comment('1 for admin,2 for customer,3 for providers,4 for all user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_documents', function (Blueprint $table) {
            //
        });
    }
}
