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
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();

            /* Users: 0=>Calon Kader, 1=>Kader, 2=>Ketum, 3=>Sekum, 4=>Bendum, 5=>Kabid*/
            $table->tinyInteger('type')->default(0);

            $table->string('password');
            $table->string('alamat_tinggal');
            $table->string('no_telp');
            $table->string('whatsapp');
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
