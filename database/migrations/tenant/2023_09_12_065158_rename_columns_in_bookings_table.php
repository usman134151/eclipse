<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('bit', 'boolean');
    
        Schema::table('bookings', function (Blueprint $table) {
            $table->renameColumn('is_completed', 'is_paid');
            $table->renameColumn('isCompleted', 'is_closed');
        });
    }
    
    public function down()
    {
        DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('bit', 'boolean');
    
        Schema::table('bookings', function (Blueprint $table) {
            $table->renameColumn('is_paid', 'is_completed');
            $table->renameColumn('is_closed', 'isCompleted');
        });
    }
};
