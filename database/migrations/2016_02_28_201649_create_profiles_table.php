<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('company_city');
            $table->string('company_state');
            $table->string('company_country');
            $table->string('company_tax_id');
            $table->string('company_reg_com');
            $table->string('company_bank_account');
            $table->string('company_logo');
            $table->string('phone');
            $table->integer('user_id')->unsigned();
            $table->integer('subscription_id')->default('1');

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
        Schema::drop('profiles');
    }
}
