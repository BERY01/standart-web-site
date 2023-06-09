<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Configs extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('configs', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->string('logo')->nullable();
                $table->string('favicon')->nullable();
                $table->integer('active')->default(1);
                $table->string('facebook')->nullable();
                $table->string('twitter')->nullable();
                $table->longText('google')->nullable();
                $table->string('linkedin')->nullable();
                $table->string('youtube')->nullable();
                $table->string('instagram')->nullable();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
