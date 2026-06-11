<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('buildings', function (Blueprint $table) {
        $table->id();

        $table->boolean('is_active')->default(true);
        $table->integer('sort')->default(100);

        $table->string('name')->nullable();

        $table->string('address');
        $table->float('latitude');
        $table->float('longitude');
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('buildings');
    }
  };
