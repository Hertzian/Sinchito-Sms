<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch_message', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('message_list');//FK
            $table->string('date_sent');
            $table->string('sender');
            $table->string('recipient');
            $table->string('message_length');
            $table->string('encoding');
            $table->string('message_status');
            $table->string('body');
            $table->string('send_at');
            $table->string('is_queued');
            $table->string('cc');
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
        Schema::dropIfExists('batch_message');
    }
}
