<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCurrencyToAdminProfile extends Migration
{
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {

            $table->string('currency')->after('company_country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('currency');

        });
    }
}
