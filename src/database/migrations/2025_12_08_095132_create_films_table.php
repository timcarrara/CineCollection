<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Genre;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('director')->nullable();
            $table->unsignedSmallInteger('release_year')->nullable();
            $table->text('synopsis')->nullable();

            // Clés étrangères
            $table->foreignIdFor(Genre::class)
                  ->constrained()
                  ->cascadeOnDelete()
                  ->index();

            $table->foreignIdFor(User::class)
                  ->constrained()
                    ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
