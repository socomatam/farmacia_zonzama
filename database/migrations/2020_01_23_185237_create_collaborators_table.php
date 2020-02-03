<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaboratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborators', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('nombre');
			$table->LongText('descripcion_es');
			$table->LongText('descripcion_en');
			$table->LongText('descripcion_de');
			$table->string('logo');
            $table->timestamps();
        });
		
		//DB::statement("ALTER TABLE collaborators ADD logo LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborators');
    }
}
