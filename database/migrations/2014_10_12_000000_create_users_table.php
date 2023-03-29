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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email',150)->unique()->nullable();
            $table->string('mobilenoprefix',10)->nullable();
            $table->string('mobileno',20)->unique()->nullable();

            $table->boolean('privacy')->nullable();
            $table->boolean('marketing')->nullable();
            $table->string('status',30)->nullable();

            $table->text('aboutme')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('profilepic')->nullable();
            $table->string('city')->nullable();
            $table->string('gender',30)->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('email_verification_code')->nullable();
            $table->string('mobile_verification_code')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
