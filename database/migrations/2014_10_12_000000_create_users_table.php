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
            $table->string('nis')->unique();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['pria', 'wanita']);
            $table->enum('kelas', ['1', '2', '3', '4', '5', '6']);
            $table->char('nomor_hp')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); 
            $table->string('image')->nullable();
            $table->bigInteger('saldo')->default('0');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('is_admin')->default(false);
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
