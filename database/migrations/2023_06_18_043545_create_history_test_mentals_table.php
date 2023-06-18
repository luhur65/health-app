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
        Schema::create('history_test_mentals', function (Blueprint $table) {
            $table->id();

            $table->string('kodehistory');
            $table->integer('userId')->constrained('users');
            $table->integer('skor');
            $table->text('hasil');

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
        Schema::dropIfExists('history_test_mentals');
    }
};
