<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngridient2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingridient2s', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->integer('recipe2_id')->unsigned();
            $table->timestamps();
        
			$table	
				->foreign('recipe2_id')
				->references('id')->on('recipe2s')
				->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingridient2s');
    }
}
