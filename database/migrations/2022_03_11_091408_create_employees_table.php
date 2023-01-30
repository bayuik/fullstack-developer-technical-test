<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id')->constrained();
            $table->string('name');
            $table->string('nip');
            $table->unique('nip');
            $table->string('department')->nullable()->default("none");
            $table->date('date_of_birth')->default(date('Y-m-d'));
            $table->year('year_of_birth')->default(date('Y'));
            $table->string('address')->nullable()->default("none");
            $table->integer('phone')->nullable()->default(0);
            $table->string('religion')->nullable()->default("none");
            $table->boolean('status')->nullable()->default(false);
            $table->string('image')->nullable()->default("none");
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
        Schema::dropIfExists('employees');
    }
}
