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
        Schema::table('business_setups', function (Blueprint $table) {
            $table->string('invoice_header')->nullable();
            $table->string('invoice_footer')->nullable()->after('invoice_header');
            $table->string('invoice_logo')->nullable()->after('invoice_footer');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_setups', function (Blueprint $table) {
            $table->dropColumn(['invoice_header', 'invoice_footer', 'invoice_logo']);
        });
    }
};
