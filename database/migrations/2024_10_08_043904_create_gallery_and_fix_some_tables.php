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
        Schema::create('gallery', function (Blueprint $table) {
            $table->id();
            $table->integer('idForm');
            $table->integer('idImage');
            $table->timestamps();

            $table->foreign('idForm')->references('id')->on('form')->onDelete('cascade');
            $table->foreign('idImage')->references('id')->on('images')->onDelete('cascade');
        });
        Schema::table('tema', function (Blueprint $table) {
            //
            $table->integer('totalWeddingPhoto')->default(0);
            $table->integer('totalWeddingBackground')->default(0);
        });
        Schema::table('image_order', function (Blueprint $table) {
            //
            $table->string('partName')->nullable();
        });
        Schema::table('form', function (Blueprint $table) {
            //
            $table->integer('idTema')->nullable()->after('slug');

            $table->foreign('idTema')->references('id')->on('tema')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery');
    }
};
