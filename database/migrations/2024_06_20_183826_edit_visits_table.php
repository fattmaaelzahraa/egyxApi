<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->foreignId('plan_id')->constrained()->onDelete('cascade');
            $table->boolean('wishlist')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('visits');
    }
};

