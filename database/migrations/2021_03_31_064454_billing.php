<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Billing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing', function (Blueprint $table) {
            $table->id();
            $table->string('invoice')->Nullable();
            $table->string('services_id')->Nullable();
            $table->string('duedate')->Nullable();
            $table->string('price')->Nullable();
            $table->string('status')->Nullable();
            $table->string('photo')->Nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('billing');
    }
}
