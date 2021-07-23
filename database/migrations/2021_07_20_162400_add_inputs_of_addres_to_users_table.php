<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInputsOfAddresToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('document')->after('email')->unique();
            $table->string('phone')->after('document');
            $table->string('cep')->after('phone');
            $table->string('street')->after('cep');
            $table->string('number')->after('street');
            $table->string('district')->after('number');
            $table->string('city')->after('district');
            $table->string('state')->after('city');
            $table->string('complement')->nullable()->after('state');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
