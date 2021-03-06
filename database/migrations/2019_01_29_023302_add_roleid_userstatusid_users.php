<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleidUserstatusidUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('role_id')->nullable();
            $table->foreign('role_id')
            ->references('id')
            ->on('roles')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->unsignedInteger('userstatus_id')->nullable();
            $table->foreign('userstatus_id')
            ->references('id')
            ->on('userstatuses')
            ->onDelete('set null')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
