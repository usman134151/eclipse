<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFinalFieldsToServiceCategoriesTable extends Migration
{
 /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::table('service_categories', function (Blueprint $table) {
                $table->longText('provider_return_window_v')->nullable()->comment('virtual provider return window')->checkRaw('json_valid(`provider_return_window_v`)');
                $table->integer('min_providers')->nullable();
                $table->integer('max_providers')->nullable();
                $table->integer('max_providers_v')->nullable();
                $table->integer('min_providers_v')->nullable();
                $table->integer('default_providers')->nullable();
                $table->integer('default_providers_v')->nullable();
                $table->integer('provider_limit')->nullable();
                $table->integer('provider_limit_v')->nullable();
                $table->integer('maximum_assistance_hours')->nullable();
                $table->integer('maximum_assistance_hours_v')->nullable();
                $table->integer('maximum_assistance_min')->nullable();
                $table->integer('maximum_assistance_min_v')->nullable();
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
                $table->dropColumn('provider_return_window_v');
                $table->dropColumn('min_providers');
                $table->dropColumn('max_providers');
                $table->dropColumn('max_providers_v');
                $table->dropColumn('min_providers_v');
                $table->dropColumn('default_providers');
                $table->dropColumn('default_providers_v');
                $table->dropColumn('provider_limit');
                $table->dropColumn('provider_limit_v');
                $table->dropColumn('maximum_assistance_hours');
                $table->dropColumn('maximum_assistance_hours_v');
                $table->dropColumn('maximum_assistance_min');
                $table->dropColumn('maximum_assistance_min_v');
            });
        }
    
    
};
