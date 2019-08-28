<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('vehicle_id')->unsigned();
            $table->string('title');
            $table->string('description')->nullable();
            $table->float('labor');
            $table->float('tax')->default(0);
            $table->string('pay_by');
            $table->integer('inserted_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->index('vehicle_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('steps');
    }
}
