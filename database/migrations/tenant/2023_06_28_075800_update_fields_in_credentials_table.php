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
        Schema::table('credentials', function (Blueprint $table) {
            $table->boolean('attach_tags')->default(0)->change();
            $table->boolean('attach_specializations')->default(0)->change();
            $table->boolean('attach_accommodation_services')->default(0)->change();

            $table->boolean('deactivate_associated_service')->default(0)->change();
            $table->boolean('reset_provider_priority')->default(0)->change();
            $table->boolean('hold_all_assignment_invitations')->default(0)->change();
            $table->boolean('lenient')->default(0)->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('credentials', function (Blueprint $table) {
            //
        });
    }
};
