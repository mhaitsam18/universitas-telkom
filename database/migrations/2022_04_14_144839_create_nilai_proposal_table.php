<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_proposal', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('proposal_id')->unsigned()->nullable();
            $table->BigInteger('ruangan_id')->unsigned()->nullable();
            $table->enum('penguji', [1, 2]);
            $table->dateTime('tanggal_penilaian')->nullable();
            $table->string('ruangan')->nullable();
            $table->double('nilai_akhir')->nullable();
            $table->text('catatan')->nullable();
            $table->longText('file')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('proposal_id')->references('id')->on('proposal')->onDelete('cascade');
            $table->foreign('ruangan_id')->references('id')->on('ruangan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_proposal');
    }
}
