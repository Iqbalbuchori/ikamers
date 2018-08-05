<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTblCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_customer', function (Blueprint $table) {
            //
            $table->string('status_jual')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_customer', function (Blueprint $table) {
            //
            $table->dropColumn('status_jual');
            // kalo gak salah gini si coba aja migrate
            // sekarang coba mas daftar cek database msuk gak itu belum masuk ya status_jualnya
        });
    }
}
// enggak salah mas, betuuul
// langsung ke beranda mas
// belum masuk mas