<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnIntoQuoteLeadTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('quote_leads', function (Blueprint $table) {
      $table->enum('override_appied',[0,1])->default(0)->comment('0 for no,1 for yes');
      $table->double('total_price', 8, 2)->default(0)->nullable();
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
