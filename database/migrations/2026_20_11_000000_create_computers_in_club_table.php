<?php

use App\Models\Club;
use App\Models\Computer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;





return new class extends Migration
{
    public function up(): void
    {
        Schema::create('computers_club', function (Blueprint $table) {

            $table->foreignIdFor(Club::class, 'club_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignIdFor(Computer::class, 'computer_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->primary(['club_id','computer_id']);

        });
    }



    public function down(): void
    {
        Schema::dropIfExists('computers_club');
    }
};
