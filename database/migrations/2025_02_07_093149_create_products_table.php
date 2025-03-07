<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('product', function(Blueprint $table) {
            $table->increments("id");
            $table->string("name", 22);
            $table->float("price", 2);
            $table->integer("quantity");
            $table->timestamps();
        });
    }
    
    public function down() {
        Schema::dropIfExists("product");
    }
};
