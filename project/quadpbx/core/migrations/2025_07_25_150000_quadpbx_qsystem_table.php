<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Create the qsystem table
     */
    public function up(): void
    {
        Schema::create('qsystem', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tenant')->default('default');
            $table->string('group')->default('default');
            $table->string('type', 32)->default('raw');
            $table->string('value')->nullable();
            $table->bigInteger('blobref')->nullable();
            $table->unique(['tenant', 'name', 'group']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qsystem');
    }
};
