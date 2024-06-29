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
        Schema::create('visits', function (Blueprint $table) {

            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('place_id')->constrained('places')->cascadeOnDelete();
            $table->integer('rate')->default(null);
            $table->boolean('favourite')->default(0);
            $table->primary(['user_id', 'place_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
};
