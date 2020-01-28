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
            $table->bigIncrements('id');
			$table->string('nombre');
			$table->LongText('descripcion');
			$table->double('precio', 8, 2);
			$table->binary('miniatura_1');
			$table->binary('miniatura_2');
			$table->binary('miniatura_3');
			$table->binary('miniatura_4');
			$table->binary('miniatura_5');
            $table->timestamps();
        });
		
		DB::statement("ALTER TABLE products ADD imagen LONGBLOB");
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
