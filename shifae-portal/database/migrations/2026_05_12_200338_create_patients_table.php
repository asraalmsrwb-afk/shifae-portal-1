<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();//رقم الملف الطبي
            $table->string('patientName');//اسم المريض
            $table->string('phoneNumber');//رقم هاتف المريض 
            $table->date('dateOfBirth')->nullable();//تاريخ الميلاد
            $table->string('gender')->nullable();//الجنس

            $table->timestamps();//وقت الزيارة
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
