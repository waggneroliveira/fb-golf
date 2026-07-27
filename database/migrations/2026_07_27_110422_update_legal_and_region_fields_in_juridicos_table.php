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
        Schema::table('juridicos', function (Blueprint $table) {
            $table->enum('legal', ['estatutos', 'assembleias', 'transpareencia'])
                  ->nullable()
                  ->change();
            $table->date('date');
            $table->enum('region', ['nacional', 'municipal'])
                  ->default('nacional')
                  ->change();
            $table->date('date')->nullable()->after('region');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('juridicos', function (Blueprint $table) {
            $table->dropColumn('date');

            $table->enum('legal', ['leis', 'decretos', 'portaria'])
                  ->nullable()
                  ->change();
            
            $table->enum('region', ['nacional', 'municipal'])
                  ->nullable()
                  ->change();
        });
    }
};