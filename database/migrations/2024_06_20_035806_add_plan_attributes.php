<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->string('trip_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('trip_length');
            $table->json('themes');
            $table->json('cities')
            ->after('user_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
