<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("level")->nullable();
            $table->string("title")->nullable();
            $table->string("date_from")->nullable();
            $table->string("date_to")->nullable();
            $table->mediumText("short_description")->nullable();
            $table->string("icon")->nullable();
            $table->string("type")->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};