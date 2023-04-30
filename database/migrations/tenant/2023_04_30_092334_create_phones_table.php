<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    public function up()
    {
        // Create the phones table
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('phone_title');
            $table->string('phone_number');
            $table->unsignedBigInteger('model_id');
            $table->string('model_type');
            $table->timestamps();
        });

        // Drop the company_phones table if it exists
        //Schema::dropIfExists('company_phones');
    }

    public function down()
    {
        // Create the company_phones table
        Schema::create('company_phones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('phone_title');
            $table->string('phone_number');
            $table->timestamps();

            $table->foreign('company_id')
                  ->references('id')->on('companies')
                  ->onDelete('cascade');
        });

        // Drop the phones table
        Schema::dropIfExists('phones');
    }
}
