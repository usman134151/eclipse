<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceIntoQuoteTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('quote_leads', function (Blueprint $table) {
      $table->double('service_price', 8, 2)->default(0)->after('updated_at');
      $table->double('override_amount', 8, 2)->default(0)->after('service_price');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    //
  }
}
