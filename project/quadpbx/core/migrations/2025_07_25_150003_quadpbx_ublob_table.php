<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create the qblob table
     */
    public function up(): void
    {
        Schema::connection('ublob')->create('ublob', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('utableref');
            $table->binary('blob')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('ublob')->dropIfExists('ublob');
    }
};
