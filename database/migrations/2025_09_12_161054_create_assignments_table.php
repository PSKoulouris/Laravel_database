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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->boolean("is_done")->default(false);
            $table->date("target_date");
            //Foreign_key:
            $table->unsignedBigInteger("student_id"); 
            //When creating a foreign key that references an incrementing integer, always make the foreign key column unsigned (Signed = allows negative, smaller positive max. Unsigned = only positive, bigger max → perfect for ID)
            //Foreign key constraint:
            $table->foreign("student_id")->references("id")->on("students")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
