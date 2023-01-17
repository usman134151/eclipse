<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionCoumnIntoQuote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('quote_leads', function (Blueprint $table) {
      $table->text('additional_label')->nullable()->before('override_amount');
      $table->text('additional_label_provider')->nullable()->after('additional_charge');
      $table->double('additional_charge_provider', 8, 2)->default(0)->after('additional_label_provider');
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
