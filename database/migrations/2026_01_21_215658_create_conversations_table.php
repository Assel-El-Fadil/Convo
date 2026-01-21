<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_one_id')
                  ->constrained('users')
                  ->cascadeOnDelete();

            $table->foreignId('user_two_id')
                  ->constrained('users')
                  ->cascadeOnDelete();

            $table->timestamps();

            $table->unique(['user_one_id', 'user_two_id']);
        });

        DB::statement(
            'ALTER TABLE conversations ADD CONSTRAINT chk_user_order CHECK (user_one_id < user_two_id)'
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('conversations');
    }
};
