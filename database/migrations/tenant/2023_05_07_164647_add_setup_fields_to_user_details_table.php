<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSetupFieldsToUserDetailsTable extends Migration
{
    public function up()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->unsignedBigInteger('language_id')->after('id')->nullable();
            $table->unsignedBigInteger('ethnicity_id')->after('language_id')->nullable();
            $table->unsignedBigInteger('timezone_id')->after('ethnicity_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('user_detail', function (Blueprint $table) {
            $table->dropColumn(['language_id', 'ethnicity_id', 'timezone_id']);
        });
    }
}
