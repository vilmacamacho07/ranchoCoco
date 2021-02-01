<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_role', function (Blueprint $table) {
         
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id','fk_roleuserp_roles')->references('id')->on('rol')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('permission_id');
            $table->foreign('permission_id','fk_roleuser_permissions')->references('id')->on('permissions')->onDelete('cascade')->onUpdate('cascade');
       
            $table->charset='utf8mb4';
            $table->collation='utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_role');
    }
}
