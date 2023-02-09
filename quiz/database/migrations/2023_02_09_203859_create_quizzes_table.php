<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzeinf', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->date('created_at');
            $table->string('Category', 20);
            $table->string('mult');
            $table->date('update_at');
            $table->string('question');
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
        Schema::dropIfExists('quizzeinf');
    }
};
