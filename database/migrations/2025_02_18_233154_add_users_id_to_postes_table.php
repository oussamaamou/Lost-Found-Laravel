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
        Schema::table('postes', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id')->after('id'); 
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('postes', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
            $table->dropColumn('users_id'); 
        });
    }
};
