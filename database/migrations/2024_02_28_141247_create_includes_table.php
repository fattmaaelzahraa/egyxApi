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
        Schema::create('includes', function (Blueprint $table) {

            $table->foreignId('plan_id')->constrained('plans')->cascadeOnDelete();
            $table->foreignId('place_id')->constrained('places')->cascadeOnDelete();

            $table->primary(['plan_id', 'place_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('includes');
    }
};
