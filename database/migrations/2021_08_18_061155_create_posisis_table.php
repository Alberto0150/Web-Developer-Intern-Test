<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posisis', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->mediumText('name');
            $table->mediumText('department');
            $table->mediumText('type_of_work');
            $table->mediumText('location');
            $table->date('date_open')->nullable();
            $table->date('date_close')->nullable();
            $table->longText('description')->nullable();
            $table->longText('requirements')->nullable();
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
        Schema::dropIfExists('posisis');
    }
}
