<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColoumnIntoProvAppTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('provider_applications', function (Blueprint $table) {
      $table->integer('admin_action_status')->default(0)->comment('0 for pending,1 for approved,2 deny')->after('status');
      $table->datetime('date_submitted')->nullable();
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
