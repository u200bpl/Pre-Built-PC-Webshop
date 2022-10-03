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
            $table->string('img');
            $table->string('name');
            $table->string('description');
            $table->foreignId('processor_id')->constrained();
            $table->foreignId('cpu_cooler_id')->constrained();
            $table->foreignId('motherboard_id');
            $table->foreignId('memory_id');
            $table->foreignId('storage_id');
            $table->foreignId('video_card_id');
            $table->foreignId('case_id');
            $table->foreignId('power_supply_id');
            $table->foreignId('operating_system_id');
            $table->string('price');
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
