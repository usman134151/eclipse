<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE invoices DROP COLUMN invoice_status');
        DB::statement("ALTER TABLE invoices ADD invoice_status INT(11) COMMENT '0 for Not issued, 1 for issued, 2 for paid, 3 for Overdue, 4 for partial' DEFAULT 1");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            //
        });
    }
};
