<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('message', function(Blueprint $table){
            $table->bigInteger('message_list_id')->unsigned();
            $table->foreign('message_list_id')
                ->references('id')->on('message_list')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('message', function(Blueprint $table){
            $table->dropForeign('message_message_list_id_foreign');
        });
    }
}
