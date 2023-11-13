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
        Schema::create('reimbursement_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('reimbursement_id');
            $table->string('attachment_path');
            // $table->foreign('reimbursement_id')->references('id')->on('booking_reimbursements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reimbursement_attachments');
    }
};
