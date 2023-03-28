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
            $table->string('name');
            $table->string('surname');
            $table->string('email',150)->unique();
            $table->string('mobilenoprefix',10)->unique();
            $table->string('mobileno',20)->unique();

            $table->boolean('privacy');
            $table->boolean('marketing');
            $table->string('status',30);

            $table->text('aboutme');
            $table->date('birthdate');
            $table->string('profilepic');
            $table->string('city');
            $table->string('gender',30);

            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('email_verification_code')->nullable();
            $table->string('mobile_verification_code')->nullable();
            $table->string('password');
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
