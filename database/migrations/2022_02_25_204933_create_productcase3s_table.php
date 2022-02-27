<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductcase3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productcase3s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['normal', 'digital']);
            $table->integer('status')->default(0);
            $table->integer('admin_status')->default(0);
            $table->integer('owner_status')->default(0);
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
        Schema::dropIfExists('productcase3s');
    }
}
