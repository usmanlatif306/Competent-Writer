<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddApiDetailsInAdditionalServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('additional_services', function (Blueprint $table) {
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
        Schema::table('additional_services', function (Blueprint $table) {
            //
        });
    }
}
