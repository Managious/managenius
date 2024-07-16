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
        Schema::create('clients', function (Blueprint $table) {
            $table->id('client_id');
            $table->string('client_name',50);
            $table->string('client_city',50)->nullable();
            $table->string('client_zone',50)->nullable();
            $table->string('client_type',20)->nullable();
            $table->string('client_address',100)->nullable();
            $table->string('client_email',50)->nullable();
            $table->string('client_phone',14)->nullable();
            $table->integer('client_discount'); 
            $table->integer('client_points');
            $table->integer('points_system');
            $table->date('points_reset_date')->default(DB::raw('CURRENT_DATE'));
            $table->string('client_in_partnership',250); 
            $table->string('payment_type',20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
