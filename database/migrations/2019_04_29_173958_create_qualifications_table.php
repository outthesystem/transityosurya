<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('agency_id')->nullable();
            $table->integer('owner_id')->nullable();
            $table->integer('vehicle_id')->nullable();
            $table->integer('driver_id')->nullable();
            $table->integer('credentialn')->nullable();
            $table->string('name')->nullable();
            $table->date('expiration')->nullable();
            $table->string('wafers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualifications');
    }
}
