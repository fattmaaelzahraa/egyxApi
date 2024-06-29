<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilterRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('filter_requests', function (Blueprint $table) {
            $table->id();
            $table->json('themes')->nullable();
            $table->json('cities')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('filter_requests');
    }
}

