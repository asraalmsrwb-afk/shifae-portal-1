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
        Schema::create('doctor_schedules', function (Blueprint $table) {//جدول الخاص بساعات عمل الدكاترة
            $table->id();
        // ربط الجدول بجدول الأطباء (وليس المستخدمين العامين)
        $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade');

        // الخصائص حسب الكلاس دايجرام
        $table->string('day');           // اليوم (Sunday, Monday, etc.)
        $table->time('startTime');      // وقت البداية
        $table->time('endTime');        // وقت النهاية
        
        // حالة التوفر (موجودة في رسمتك كـ isAvailable)
        // نوعها boolean (يعني يا True متاح، يا False غير متاح)
        $table->boolean('isAvailable')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_schedules');
    }
};
