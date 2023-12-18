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
        /*Schema::table('categories', function (Blueprint $table) {
            $table->softDeletes();
        });*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*Schema::table('categories', function (Blueprint $table) {
            $table->softDeletes()->after('updated_at');
            $table->text('description')->after('name');
            $table->string('slug')->nullable()->after('description');
            $table->boolean('status')->default(true)->after('slug');
            $table->string('cover')->nullable()->after('id');
        });*/
    }
};
