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
        Schema::table('specialization_rates', function (Blueprint $table) {
            // Add the new columns
            $table->string('model_type', 40)->default('provider')->nullable();
            $table->longText('specialization_rate_p')->default(null);
            $table->longText('specialization_rate_t')->default(null);
        });
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialization_rates', function (Blueprint $table) {
            // Drop the added columns if needed
            $table->dropColumn(['model_type', 'specialization_rate_p', 'specialization_rate_t']);
        });
    }
};
