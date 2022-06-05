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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('responsible_id');
            $table->unsignedBigInteger('external_contact_id');
            $table->json('companies');
            $table->enum('status', ['pending', 'active', 'inactive'])->default('pending');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->json('services')->nullable();
            $table->json('software')->nullable();
            $table->json('hardware')->nullable();
            $table->json('others')->nullable();
            $table->unsignedInteger('max_hours_cycle')->nullable();
            $table->unsignedInteger('max_weekly_meetings')->nullable();
            $table->enum('invoice_mode',['monthly','weekly','daily','event'])->nullable();
            $table->double('price_per_hour')->nullable();
            $table->double('price_per_cycle')->nullable();
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
        Schema::dropIfExists('contracts');
    }
};
