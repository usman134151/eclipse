<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsIntoQuoteTablle extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('quote_leads', function (Blueprint $table) {
      $table->text('phy_address_name')->nullable();
      $table->text('phy_address_line_one')->nullable();
      $table->text('phy_address_line1')->nullable();
      $table->text('phy_address_line2')->nullable();
      $table->string('phy_city')->nullable();
      $table->string('phy_state')->nullable();
      $table->string('phy_zip')->nullable();
      $table->string('phy_latitude','50')->nullable();
      $table->string('phy_longitude','50')->nullable();

      $table->text('bill_address_name')->nullable();
      $table->text('bill_address_line_one')->nullable();
      $table->text('bill_address_line1')->nullable();
      $table->text('bill_address_line2')->nullable();
      $table->string('bill_city')->nullable();
      $table->string('bill_state')->nullable();
      $table->string('bill_zip')->nullable();
      $table->string('bill_latitude','50')->nullable();
      $table->string('bill_longitude','50')->nullable();
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
