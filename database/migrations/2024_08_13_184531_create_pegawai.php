
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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 20)->unique();
            $table->string('nama', 50);
            $table->foreignId('jabatan_id')->nullable()->constrained('jabatan')->onDelete('set null'); // Mengacu ke tabel jabatan
            $table->string('gambar')->nullable(); // Kolom untuk menyimpan path atau URL gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
