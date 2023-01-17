<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTriggerToTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('templates', 'trigger'))
        {
            Schema::table('templates', function (Blueprint $table) {
                $table->dropColumn('trigger');

            });
        }
        Schema::table('templates', function (Blueprint $table) {
            $table->string('trigger')->after('id');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('templates', function (Blueprint $table) {
            $table->dropColumn('trigger');
        });
    }
}
