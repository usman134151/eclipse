<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserLinkedAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_linked_addresses', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->bigInteger('address_id');
            $table->boolean('is_default')->nullable()->default(0);
            $table->primary(['user_id', 'address_id']);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_linked_addresses', function (Blueprint $table) {
            //
        });
    }
};
