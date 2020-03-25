<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item', function(Blueprint $table){
            $table->bigInteger('item_list_id')->unsigned();
            $table->foreign('item_list_id')
                ->references('id')->on('item_list')
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
        Schema::table('item', function(Blueprint $table){
            $table->dropForeign('item_item_list_id_foreign');
        });
    }
}
