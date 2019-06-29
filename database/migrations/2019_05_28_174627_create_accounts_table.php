<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->default('normal');
            $table->decimal('price', 5, 2)->default(.65);
            $table->bigInteger('message_limit')->default(0);
            $table->decimal('balance', 5, 2)->default(0);
            $table->string('status')->default('1');
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
        Schema::dropIfExists('accounts');
    }
}
