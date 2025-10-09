<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);  
            $table->string('category', 50); 
            $table->string('description', 255)->nullable(); 
            $table->boolean('visible')->default(true); 
            $table->text('body')->nullable();

            $table->timestamps();
        });
    }

    
     
     
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
