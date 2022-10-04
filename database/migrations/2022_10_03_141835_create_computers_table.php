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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('img')->nullable();
            $table->string('description')->nullable();
            $table->float('price');
            $table->foreignId('processor_id')->references('id')->on('processors');
            $table->foreignId('graphicscard_id')->references('id')->on('graphicscards');
            $table->foreignId('ram_id')->references('id')->on('rams');
            $table->foreignId('pccase_id')->references('id')->on('pccases');
            $table->foreignId('motherboard_id')->references('id')->on('motherboards');
            $table->foreignId('cpucooler_id')->references('id')->on('cpucoolers');
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
        Schema::dropIfExists('computers');
    }
};
