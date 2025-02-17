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
        Schema::create('detects', function (Blueprint $table) {

            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('monument_id')->constrained('monuments')->cascadeOnDelete();

            $table->primary(['user_id', 'monument_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detects');
    }
};
