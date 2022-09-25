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
        Schema::create('navegators', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('lang',60)->nullable();
            $table->string('url');
            $table->string('clase')->nullable();
            $table->boolean('enabled',true);
            $table->smallInteger('order')->nullable()->defaultValue(1);
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
        Schema::dropIfExists('navegators');
    }
};
