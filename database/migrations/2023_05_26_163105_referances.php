<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Referances extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('referances', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->string('slug');
                $table->string('image');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referances');
    }
};
