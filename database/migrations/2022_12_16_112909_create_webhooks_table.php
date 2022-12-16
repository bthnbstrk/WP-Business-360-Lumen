<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_webhooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("from",5000)->nullable();
            $table->string("message_id",200)->nullable();
            $table->string("message",2500)->nullable();
            $table->string("timestamp")->nullable();
            $table->string("type",100)->nullable();
            $table->string("sender_name",200)->nullable();
            $table->string("sender_wp_id",200)->nullable();
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
        Schema::dropIfExists('tbl_webhooks');
    }
};
