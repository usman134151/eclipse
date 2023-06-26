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
        Schema::table('credential_documents', function (Blueprint $table) {
            Schema::dropIfExists('credentials_documents');
            $table->dropColumn('document_type_radio');
            $table->dropColumn('expiration_within_price');

            $table->string('document_type')->nullable()->default(null);
            $table->string('expiration_type')->nullable()->default(null);
            $table->string('expiry')->nullable()->default(null);


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('credential_documents', function (Blueprint $table) {
            //
        });
    }
};
