<?php

use App\Models\Movil;
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
        Schema::create('movils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("modelo");
            $table->string("sistema");
            $table->string("marca");
            $table->string("pulgadas")->nullable();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('movils');
    }
};
