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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('role_id')->default(100);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles')
            ->onDelete('cascade');
        });

        $password = Hash::make('Qwerty123');

        DB::table('users')->insert([
            'id' => 1,
            'name' =>  'Admin',
            'email' => 'admin@amreflibrary.com',
            'email_verified_at' => now(),
            'role_id' => '300',
            'password' => $password,
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' =>  'Librarian',
            'email' => 'librarian@amreflibrary.com',
            'email_verified_at' => now(),
            'role_id' => '200',
            'password' => $password,
            'remember_token' => Str::random(10),
        ]);
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
