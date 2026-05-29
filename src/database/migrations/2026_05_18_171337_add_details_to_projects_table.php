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
        // Gunakan pengecekan if di awal agar tidak mencoba membuat kolom yang sudah ada
        if (! Schema::hasColumn('projects', 'problem_analysis')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->text('problem_analysis')->nullable();
                $table->text('system_requirements')->nullable();
                $table->text('architecture')->nullable();
                $table->text('tech_stack')->nullable();
                $table->string('erd_image')->nullable();
                $table->string('flowchart_image')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'problem_analysis',
                'system_requirements',
                'architecture',
                'tech_stack',
                'erd_image',
                'flowchart_image',
            ]);
        });
    }
};
