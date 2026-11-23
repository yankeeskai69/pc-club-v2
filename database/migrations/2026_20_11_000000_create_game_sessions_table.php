<?php

use App\Models\Client;
use App\Models\Computer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('game_sessions', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Computer::class, 'computer_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignIdFor(Client::class, 'client_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->dateTime("start_at");
            $table->dateTime("end_at")
                ->nullable();

            $table->decimal('total_cost');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('game_sessions');
    }
};
