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
        Schema::create('leader_histories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('nim', 20);
            $table->string('from_year');
            $table->string('to_year');
            $table->string('photo_url', 50);
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
        Schema::dropIfExists('leader_histories');
    }
};
