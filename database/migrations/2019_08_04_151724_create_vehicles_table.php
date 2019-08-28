<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('file');
            $table->dateTime('purchase_date');
            $table->integer('year');
            $table->string('make');
            $table->string('model');
            $table->string('trim');
            $table->string('color');
            $table->string('vin');
            $table->double('km');
            $table->text('note');
            $table->float('purchase_price');
            $table->float('selling_price')->default(0);
            $table->float('tax')->default(0);
            $table->string('pay_by');
            $table->integer('inserted_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
