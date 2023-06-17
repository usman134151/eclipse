<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCredentialsTable extends Migration
{
    /**
     * Run the migration.
     *
     * @return void
     */
    public function up()
    {
        // Drop the credentials table if it exists
        Schema::dropIfExists('credentials');

        // Create the credentials table
        Schema::create('credentials', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('attach_tags')->nullable();
            $table->string('attach_specializations')->nullable();
            $table->string('attach_accommodation_services')->nullable();
            $table->string('deactivate_associated_service')->nullable();
            $table->string('reset_provider_priority')->nullable();
            $table->string('hold_all_assignment_invitations')->nullable();
            $table->string('lenient')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        // Drop the credentials table
        Schema::dropIfExists('credentials');
    }
}
