<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCompaniesTable extends Migration
{
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            // Add industry_id column
            $table->integer('industry_id')->nullable()->unsigned();
            //$table->foreign('industry_id')->references('id')->unsigned()->on('industries')->onDelete('set null');

            // Add company_website column
            $table->string('company_website')->nullable();

            // Add language_id column
            $table->integer('language_id')->nullable()->unsigned();
            //$table->foreign('language_id')->references('id')->unsigned()->on('setup_values')->onDelete('set null');

            // Add company_service_start_date and company_service_end_date columns
            $table->date('company_service_start_date')->nullable();
            $table->date('company_service_end_date')->nullable();

            // Add company_logo column
            $table->string('company_logo')->nullable();
        });
    }

    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropForeign(['industry_id']);
            $table->dropForeign(['language_id']);
            $table->dropColumn([
                'industry_id',
                'company_website',
                'language_id',
                'company_service_start_date',
                'company_service_end_date',
                'company_logo',
            ]);
        });
    }
}
