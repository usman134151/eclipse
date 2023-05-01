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
        if (!Schema::hasTable('admin_teams')) {
            Schema::create('admin_teams', function (Blueprint $table) {
                $table->id();
                $table->string('team_name');
                $table->foreignId('admin_id')->constrained('users');
                $table->string('team_phone');
                $table->string('team_email');
                $table->text('team_description');
                $table->text('team_notes')->nullable();
                $table->timestamps();
        });
        }
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_teams');
    }
};
