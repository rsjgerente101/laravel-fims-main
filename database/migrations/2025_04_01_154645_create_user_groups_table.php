<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('user_groups', function (Blueprint $table) {
            $table->id();
            
            $table->string('group_name');
            $table->Integer('group_level')->unique();
            $table->integer('group_status')->default(1); // Active by default
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_groups');
        
    }
};


