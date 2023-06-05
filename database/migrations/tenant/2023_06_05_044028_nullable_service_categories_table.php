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
        Schema::table('service_categories', function (Blueprint $table) {
            $table->boolean('disable_for_companies')->nullable()->default(0)->change();
            $table->boolean('display_in_quote')->nullable()->default(0)->change();
            $table->boolean('display_in_application')->nullable()->default(0)->change();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->boolean('disable_for_companies')->change();
            $table->unsignedInteger('minimum_assistance_min')->change();
        });
    }
};
