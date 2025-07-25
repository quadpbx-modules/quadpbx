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
        Schema::connection('blob')->create('qblob', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('qsysref');
            $table->binary('blob')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('blob')->dropIfExists('qblob');
    }
};
