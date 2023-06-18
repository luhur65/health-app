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
        Schema::create('cerita_mentals', function (Blueprint $table) {
            $table->id();
            $table->integer('userId')->constrained('users')->onDelete('cascade');
            $table->string('kodecerita');
            $table->string('judul');
            $table->string('slug');
            $table->text('deskripsi');
            $table->text('narasi');
            $table->text('pesan');
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
        Schema::dropIfExists('cerita_mentals');
    }
};
