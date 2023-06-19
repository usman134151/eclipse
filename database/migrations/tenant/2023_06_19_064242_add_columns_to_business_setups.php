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
            $table->string('default_colour','15')->nullable();
            $table->string('foreground_colour', '15')->nullable();
            $table->string('portal_url', )->nullable();
            $table->text('company_logo')->nullable();
            $table->text('login_screen')->nullable();
            $table->text('welcome_text')->nullable();
            $table->string('notification_email', '40')->nullable();
            $table->string('response_email', '40')->nullable();


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
            Schema::dropIfExists('business_setups');
            
        });
    }
};
