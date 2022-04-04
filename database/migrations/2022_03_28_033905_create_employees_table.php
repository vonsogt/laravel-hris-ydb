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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('institution_number')->unique();
            $table->string('id_card')->unique();
            $table->string('education_personnel_number')->unique();
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->char('gender');
            $table->string('religion')->nullable();
            $table->string('education')->nullable();
            $table->char('blood_type')->nullable();
            $table->date('join_date')->nullable();
            $table->date('end_date')->nullable();
            $table->foreignId('institution_id')->constrained();
            $table->foreignId('position_id')->constrained();
            $table->text('address')->nullable();
            $table->string('status')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('partner_name')->nullable();
            $table->text('children_name')->nullable();
            $table->text('photo')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
