<?php

use App\Models\Club;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Club::class, 'club_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('name', 50);
            $table->string('zone', 50);
            $table->string('specs', 255);
            $table->decimal('price_per_hour');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
