<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sender');
            $table->string('recipient');
            $table->string('encoding');
            $table->string('body');
            $table->string('msg_length');
            $table->string('cc');
            $table->string('is_queued');
            $table->string('send_at');
            $table->string('status');
            $table->timestamps();
            // need FK
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}
