<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('careerjob_id'); 
            $table->string('name');
            $table->string('email'); 
            $table->string('phone');
            $table->date('dob');
            $table->string('degree');
            $table->string('college');
            $table->year('year');
            $table->string('percentage');
            $table->decimal('experience', 4, 1)->default(0);
            $table->string('previous_company')->nullable();
            $table->string('role')->nullable();
            $table->string('skills')->nullable();
            $table->string('location')->nullable();
            $table->string('salary')->nullable();
            $table->string('notice_period')->nullable();
            $table->string('resume');
            $table->text('cover_letter')->nullable();
            $table->timestamps();

            // Foreign key
            $table->foreign('careerjob_id')
                ->references('id')
                ->on('career_jobs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
