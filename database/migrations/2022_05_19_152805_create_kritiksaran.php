<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKritiksaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kritiksaran', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->text('kritiksaran');
            $table->unsignedBigInteger('akunsiswa_id');
            
            $table->foreign('akunsiswa_id')->references('id')->on('akunsiswa');
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
        Schema::dropIfExists('kritiksaran');
    }
}
