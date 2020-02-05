<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nombre_es');
			$table->string('nombre_en');
			$table->string('nombre_de');
			$table->LongText('descripcion_es');
			$table->LongText('descripcion_en');
			$table->LongText('descripcion_de');
			$table->double('precio', 8, 2);
			$table->string('imagen');
			$table->string('miniatura_1');
			$table->string('miniatura_2');
			$table->string('miniatura_3');
			$table->string('miniatura_4');
			$table->string('miniatura_5');
            $table->timestamps();
        });
		
		//DB::statement("ALTER TABLE products ADD imagen LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
