<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDolistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('do_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('descr');
            $table->string('status');
            $table->boolean('end')->default(0);
            $table->string('progression');
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
        Schema::dropIfExists('dolist');
    }
}
