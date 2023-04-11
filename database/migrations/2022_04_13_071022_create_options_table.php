<?php

use App\Models\Question;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Question::class)->constrained()->cascadeOnUpdate();
            $table->longText('option_text1');
            $table->longText('option_text2');
            $table->longText('option_text3');
            $table->longText('option_text4');
            $table->longText('option_text5');
            $table->integer('points1')->nullable();
            $table->integer('points2')->nullable();
            $table->integer('points3')->nullable();
            $table->integer('points4')->nullable();
            $table->integer('points5')->nullable();
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
        Schema::dropIfExists('options');
    }
}