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
            $table->string('rencana_kerja')->nullable()->default('none');
            $table->string('hasil_pemeriksaan_penunjang')->nullable()->default('none');
            $table->string('diagnosis')->nullable()->default('none');
            $table->string('terapi')->nullable()->default('none');
            $table->string('hasil_pembedahan')->nullable()->default('none');
            $table->string('saran')->nullable()->default('none');
            $table->string('catatan')->nullable()->default('none');
            $table->string('ttd')->nullable()->default('none');
            // Anamnesis
            $table->string('keluhan_utama')->nullable()->default('none');
            $table->string('riwayat_penyakit_sekarang')->nullable()->default('none');
            $table->string('riwayat_pengobatan')->nullable()->default('none');
            // --- Pemeriksaan Fisik
            // Mata
            $table->string('anemia')->nullable()->default('none');
            $table->string('ikterus')->nullable()->default('none');
            $table->string('reflek_pupil')->nullable()->default('none');
            $table->string('edema_palpebrae')->nullable()->default('none');
            // THT
            $table->string('tonsil')->nullable()->default('none');
            $table->string('faring')->nullable()->default('none');
            $table->string('lidah')->nullable()->default('none');
            $table->string('bibir')->nullable()->default('none');
            // Leher
            $table->string('jvp')->nullable()->default('none');
            $table->string('pembesaran_kelenjar')->nullable()->default('none');
            $table->enum('kaku_kuduk', ['0', '1', 'none'])->nullable()->default('0');
            // Jantung
            $table->string('s1_s2')->nullable()->default('none');
            $table->binary('reguler')->nullable()->default('0');
            $table->string('murmur')->nullable()->default('none');
            $table->string('jantung_lain_lain')->nullable()->default('none');
            // Paru
            $table->string('suara_nafas')->nullable()->default('none');
            $table->string('ronki')->nullable()->default('none');
            $table->string('wheezing')->nullable()->default('none');
            $table->string('paru_lain_lain')->nullable()->default('none');
            // Abdomen
            $table->enum('distensi', ['0', '1', 'none'])->nullable()->default('0');
            $table->enum('meteorismus', ['0', '1', 'none'])->nullable()->default('0');
            $table->integer('peristaltic')->nullable()->default('0');
            $table->enum('asciles', ['0', '1', 'none'])->nullable()->default('0');
            $table->enum('nyeri_tekan', ['0', '1', 'none'])->nullable()->default('0');
            $table->string('lokasi')->nullable()->default('none');
            // Extrimitas
            $table->enum('suhu', ['0', '1', 'none'])->nullable()->default('0');
            $table->string('edema')->nullable()->default('none');
            $table->string('extrimitas_lain_lain')->nullable()->default('none');

            $table->string('hepar')->nullable()->default('none');
            $table->string('lien')->nullable()->default('none');
            $table->string('lain_lain')->nullable()->default('none');
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
