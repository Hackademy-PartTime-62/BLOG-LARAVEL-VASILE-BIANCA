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
        Schema::table('articles', function (Blueprint $table) {
            // Aggiunge il campo image_path: stringa, max 255 caratteri, e nullable
            // Ho lasciato 'after('body')' come esempio, puoi anche usare 'after('id')'
            $table->string('image_path', 255)->nullable()->after('body');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            // Rimuove la colonna se facciamo il rollback della migration
            $table->dropColumn('image_path');
        });
    }
};

