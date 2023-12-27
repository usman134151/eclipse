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
        Schema::create('provider_invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');
            $table->string('invoice_number')->nullable()->default(null);
            $table->string('provider_invoice_number')->nullable()->default(null);
            $table->dateTime('invoice_date')->nullable()->default(null);
            $table->dateTime('invoice_due_date')->nullable()->default(null);
            $table->integer('total_amount')->nullable()->default(0);
            $table->integer('invoice_status')->nullable()->default(0)->comment("0 => pending , 1=> Accept, 2 => Reject");
            $table->unsignedBigInteger('response_by')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn('provider_invoice_number');
            $table->dropColumn('provider_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_invoices');
    }
};
