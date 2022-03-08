<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });
        
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id');
            $table->foreignId('user_id');
            $table->text('message');
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
        Schema::dropIfExists('chats');
        Schema::dropIfExists('groups');
    }
}
