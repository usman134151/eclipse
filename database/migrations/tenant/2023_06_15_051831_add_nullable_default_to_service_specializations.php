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
        Schema::table('service_specializations', function (Blueprint $table) {
            $table->unsignedBigInteger('added_by')->nullable()->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('service_specializations', function (Blueprint $table) {
            $table->unsignedBigInteger('added_by')->nullable(false)->change();
        });
    }
};
