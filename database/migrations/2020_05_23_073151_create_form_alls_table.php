<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormAllsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_alls', function (Blueprint $table) {
            $table->id();
            // --- Pasien
            $table->string('nama');
            $table->enum('sex', ['0', '1'])->default('0');
            $table->string('no_rm');
            $table->date('birth');
            $table->integer('usia');
            $table->string('alamat');
            // --- Data Medis
            $table->datetime('tgl_asesmen');
            $table->string('rencana_kerja')->default('none');
            $table->string('hasil_pemeriksaan_penunjang')->default('none');
            $table->string('diagnosis')->default('none');
            $table->string('terapi')->default('none');
            $table->string('hasil_pembedahan')->default('none');
            $table->string('saran')->default('none');
            $table->string('catatan')->default('none');
            $table->string('ttd')->default('none');
            // Anamnesis
            $table->string('keluhan_utama')->default('none');
            $table->string('riwayat_penyakit_sekarang')->default('none');
            $table->string('riwayat_pengobatan')->default('none');
            // --- Pemeriksaan Fisik
            // Mata
            $table->string('anemia')->default('none');
            $table->string('ikterus')->default('none');
            $table->string('reflek_pupil')->default('none');
            $table->string('edema_palpebrae')->default('none');
            // THT
            $table->string('tonsil')->default('none');
            $table->string('faring')->default('none');
            $table->string('lidah')->default('none');
            $table->string('bibir')->default('none');
            // Leher
            $table->string('jvp')->default('none');
            $table->string('pembesaran_kelenjar')->default('none');
            $table->enum('kaku_kuduk', ['0', '1'])->default('0');
            // Jantung
            $table->string('s1_s2')->default('none');
            $table->binary('reguler')->default('0');
            $table->string('murmur')->default('none');
            $table->string('jantung_lain_lain')->default('none');
            // Paru
            $table->string('suara_nafas')->default('none');
            $table->string('ronki')->default('none');
            $table->string('wheezing')->default('none');
            $table->string('paru_lain_lain')->default('none');
            // Abdomen
            $table->enum('distensi', ['0', '1'])->default('0');
            $table->enum('meteorismus', ['0', '1'])->default('0');
            $table->integer('peristaltic')->default('0');
            $table->enum('asciles', ['0', '1'])->default('0');
            $table->enum('nyeri_tekan', ['0', '1'])->default('0');
            $table->string('lokasi')->default('none');
            // Extrimitas
            $table->enum('suhu', ['0', '1'])->default('0');
            $table->string('edema')->default('none');
            $table->string('extrimitas_lain_lain')->default('none');

            $table->string('hepar')->default('none');
            $table->string('lien')->default('none');
            $table->string('lain_lain')->default('none');
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
        Schema::dropIfExists('form_alls');
    }
}
