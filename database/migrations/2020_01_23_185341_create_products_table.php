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
			$table->string('nombre_es')->nullable();
			$table->string('nombre_en')->nullable();
			$table->string('nombre_de')->nullable();
			$table->LongText('descripcion_es')->nullable();
			$table->LongText('descripcion_en')->nullable();
			$table->LongText('descripcion_de')->nullable();
			$table->double('precio', 8, 2)->nullable();
			$table->string('imagen')->nullable();
			$table->string('miniatura_1')->nullable();
			$table->string('miniatura_2')->nullable();
			$table->string('miniatura_3')->nullable();
			$table->string('miniatura_4')->nullable();
			$table->string('miniatura_5')->nullable();
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
