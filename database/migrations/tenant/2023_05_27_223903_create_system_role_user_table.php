<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemRoleUserTable extends Migration
{
    public function up()
    {
        Schema::create('system_role_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('system_role_id');
            $table->unsignedBigInteger('user_id');
            // Additional columns if needed
            
            // Foreign key constraints
          //  $table->foreign('system_role_id')->references('id')->on('system_roles')->onDelete('cascade');
          //  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('system_role_user');
    }
}
