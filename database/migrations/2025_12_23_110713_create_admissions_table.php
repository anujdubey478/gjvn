<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            // Student Details
            $table->string('student_name');
            $table->date('dob');
            $table->string('sex');
            $table->string('nationality')->default('Indian');
            $table->string('birth_place')->nullable();
            $table->string('photo_path')->nullable();

            // Parent Details
            $table->string('mother_name');
            $table->string('mother_occupation')->nullable();
            $table->string('mother_education')->nullable();
            $table->string('father_name');
            $table->string('father_occupation')->nullable();
            $table->string('father_education')->nullable();

            // Address & Contact
            $table->text('residential_address');
            $table->string('res_mobile');
            $table->text('office_address')->nullable();
            $table->string('off_mobile')->nullable();

            // Financial & Others
            $table->string('parents_income')->nullable();
            $table->string('category')->nullable();
            $table->string('aadhar_no')->nullable();

            // Academic
            $table->string('last_school')->nullable();
            $table->string('admission_standard');
            $table->string('sibling_details')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
