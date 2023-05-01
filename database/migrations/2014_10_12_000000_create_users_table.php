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
            // $table->longText('role')->nullable();
            // $table->tinyInteger('type')->default('0');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email',150)->unique()->nullable();
            $table->string('mobilenoprefix',10)->nullable();
            $table->string('mobileno',20)->unique()->nullable();

            $table->boolean('privacy')->nullable();
            $table->boolean('marketing')->nullable();
            $table->enum('status', ['Active', 'Pending', 'Approval', 'Suspended', 'Banned']);
            $table->longText('services')->nullable();

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

            $table->longText('height')->nullable();
            $table->longText('size')->nullable();
            $table->longText('shoeSize')->nullable();
            $table->longText('languages')->nullable();
            $table->longText('nationality')->nullable();
            $table->longText('hairColor')->nullable();
            $table->longText('description')->nullable();
            $table->longText('profileVisibility')->nullable();
            $table->tinyInteger('smsNotification')->nullable();
            $table->tinyInteger('privacyProfile')->nullable();

            $table->enum('user_type', ['user', 'hostess']);
            $table->rememberToken();
            $table->timestamps();
            // $table->timestamp('last_seen')->nullable();
            // $table->integer('credit')->nullable();

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
