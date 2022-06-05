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
        Schema::create('client_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('responsible_id');
            $table->unsignedBigInteger('contract_id');
            $table->unsignedBigInteger('software_id')->nullable();
            $table->boolean('is_exclusive')->default(false);
            $table->string('title');
            $table->text('description');
            $table->unsignedInteger('estimated_hours');
            $table->json('backlog')->nullable();
            $table->json('sprint')->nullable();
            $table->enum('status',['created','assigned','in_progress','suspended','completed','canceled'])->default('created');
            $table->unsignedBigInteger('created_by');
            $table->dateTime('assigned_at')->nullable();
            $table->dateTime('in_progress_at')->nullable();
            $table->dateTime('suspended_at')->nullable();
            $table->dateTime('completed_at')->nullable();
            $table->dateTime('canceled_at')->nullable();
            $table->unsignedBigInteger('assigned_by')->nullable();
            $table->unsignedBigInteger('in_progress_by')->nullable();
            $table->unsignedBigInteger('suspended_by')->nullable();
            $table->unsignedBigInteger('completed_by')->nullable();
            $table->unsignedBigInteger('canceled_by')->nullable();
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
        Schema::dropIfExists('client_requests');
    }
};
