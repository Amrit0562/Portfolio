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
        Schema::create('project_project_tool', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('project_id')->index();
            $table->unsignedBigInteger('project_tool_id')->index();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('project_tool_id')->references('id')->on('project_tools')->onDelete('cascade');
            $table->primary(['project_id', 'project_tool_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_project_tool');
    }
};
