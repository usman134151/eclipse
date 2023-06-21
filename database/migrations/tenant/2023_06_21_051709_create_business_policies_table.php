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
        Schema::create('business_policies', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable()->default(null);
            $table->text('file')->nullable()->default(null);
            $table->text('url')->nullable()->default(null);
            $table->boolean('customer_drive')->default(false);
            $table->boolean('cd_show_policy_customer')->default(false);
            $table->boolean('provider_drive')->default(false);
            $table->boolean('pd_show_policy_customer')->default(false);

            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_policies');
    }
};
