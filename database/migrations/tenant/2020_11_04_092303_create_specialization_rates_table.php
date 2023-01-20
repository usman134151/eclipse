<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecializationRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialization_rates', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned();
            $table->integer('accommodation_id');
            $table->integer('accommodation_service_id');
            $table->string('specialization');
            $table->string('specialization_other')->nullable();
            $table->double('specialization_rate', 8, 2)->default(0);
            $table->biginteger('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('specialization_rates', function($table) {
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialization_rates');
    }
}
