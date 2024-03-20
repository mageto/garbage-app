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
        Schema::table('clients', function (Blueprint $table) {
            $table->string('apartment')->nullable()->after('name');
            $table->string('house_no')->nullable()->after('apartment');
            $table->foreignId('county_id')->nullable()->constrained('counties')->onDelete('cascade')->after('house_no');
            $table->foreignId('constituency_id')->nullable()->constrained('constituencies')->onDelete('cascade')->after('county_id');
            $table->foreignId('ward_id')->nullable()->constrained('wards')->onDelete('cascade')->after('constituency_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign(['county_id']);
            $table->dropForeign(['constituency_id']);
            $table->dropForeign(['ward_id']);
            $table->dropColumn(['apartment', 'house_no', 'county_id', 'constituency_id', 'ward_id']);
        });
    }
};
