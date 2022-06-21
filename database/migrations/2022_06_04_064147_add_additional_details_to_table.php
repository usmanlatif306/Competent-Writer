<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalDetailsToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // guarantees table
        Schema::table('guarantees', function (Blueprint $table) {
            $table->string('api_id')->nullable();
            $table->string('origin')->default('self')->comment('self for own and api for api requests');
        });
        // services table
        Schema::table('services', function (Blueprint $table) {
            $table->string('api_id')->nullable();
            $table->string('origin')->default('self')->comment('self for own and api for api requests');
        });
        // sub_categories table
        Schema::table('sub_categories', function (Blueprint $table) {
            $table->string('api_id')->nullable();
            $table->string('origin')->default('self')->comment('self for own and api for api requests');
        });
        // tags table
        Schema::table('tags', function (Blueprint $table) {
            $table->string('api_id')->nullable();
            $table->string('origin')->default('self')->comment('self for own and api for api requests');
        });
        // urgencies table
        Schema::table('urgencies', function (Blueprint $table) {
            $table->string('api_id')->nullable();
            $table->string('origin')->default('self')->comment('self for own and api for api requests');
        });
        // work_levels table
        Schema::table('work_levels', function (Blueprint $table) {
            $table->string('api_id')->nullable();
            $table->string('origin')->default('self')->comment('self for own and api for api requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
