<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColoumnsIntoQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('quote_leads', function (Blueprint $table) {
        $table->text('meeting_link')->nullable()->after('booking_end_at');
        $table->string('meeting_phone')->nullable()->after('meeting_link');
        $table->string('meeting_passcode','100')->nullable()->after('meeting_phone');
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
