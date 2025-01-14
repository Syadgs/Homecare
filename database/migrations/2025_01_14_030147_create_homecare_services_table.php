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
        Schema::create('homecare_services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name'); // Nama layanan
            $table->text('description'); // Deskripsi layanan
            $table->decimal('price', 10, 2); // Harga layanan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homecare_services');
    }
};
