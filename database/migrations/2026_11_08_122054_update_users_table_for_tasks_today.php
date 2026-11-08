<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        // The users table already has the required columns:
        // id, username, full_name, and email.
        // No additional schema changes are necessary.
    }

    public function down(): void
    {
        // Preserve the existing users table structure.
    }
};
