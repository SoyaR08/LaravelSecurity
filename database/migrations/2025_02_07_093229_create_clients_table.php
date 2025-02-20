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
        Schema::create('client', function(Blueprint $table) {
            $table->increments("id");
            $table->string("name", 22);
            $table->string("surname", 50);
            $table->string("phone", 9);
            $table->string("email", 50);
            $table->timestamps();
        });
    }
    
    public function down() {
        Schema::dropIfExists("client");
    }
};
