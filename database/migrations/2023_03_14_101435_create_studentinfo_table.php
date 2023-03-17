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
        Schema::create('studentinfo', function (Blueprint $table) {
            $table->id('sNo');
            $table->string('idNo', 8);
            $table->string('firstName', 20);
            $table->string('middleName', 15)->nullable();
            $table->string('lastName', 15);
            $table->string('suffix', 5)->nullable();
            $table->string('course', 15);
            $table->smallinteger('year');
            $table->date('birthDate', 20);
            $table->string('gender', 6); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentinfo');
    }
};
