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
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organizer_id');
            $table->json('participants');
            $table->dateTime('meeting_date');
            $table->enum('type',['online','in-person']);
            $table->text('description');
            $table->json('meeting_order');
            $table->text('meeting_data');
            $table->enum('status',['scheduled','done','cancelled']);
            $table->json('minutes')->nullable();
            $table->json('commitments')->nullable();

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
        Schema::dropIfExists('meetings');
    }
};
