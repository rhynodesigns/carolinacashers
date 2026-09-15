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
        Schema::create('seo_scores', function (Blueprint $table): void {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seo_scan_id');
            $table->string('url');
            $table->nullableMorphs('model', 'model');
            $table->integer('score');
            $table->json('checks');
            $table->timestamps();
            $table->index('url');

            $table->foreign('seo_scan_id')
                ->references('id')
                ->on('seo_scans')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_scores');
    }
};
