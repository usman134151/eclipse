<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->string('service_type', 100)->change();
        });
    }

    public function down()
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->string('service_type')->change();
        });
    }
};
