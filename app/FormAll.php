<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormAll extends Model
{
    protected $fillable = [
        // --- Pasien
        'nama',
        'sex',
        'no_rm',
        'birth',
        'usia',
        'alamat',
        // --- Data Medis
        'tgl_asesmen',
        'rencana_kerja',
        'hasil_pemeriksaan_penunjang',
        'diagnosis',
        'terapi',
        'hasil_pembedahan',
        'saran',
        'catatan',
        'ttd',
        // Anamnesis
        'keluhan_utama',
        'riwayat_penyakit_sekarang',
        'riwayat_pengobatan',
        // --- Pemeriksaan Fisik
        // Mata
        'anemia',
        'ikterus',
        'reflek_pupil',
        'edema_palpebrae',
        // THT
        'tonsil',
        'faring',
        'lidah',
        'bibir',
        // Leher
        'jvp',
        'pembesaran_kelenjar',
        'kaku_kuduk',
        // Jantung
        's1_s2',
        'reguler',
        'murmur',
        'jantung_lain_lain',
        // Paru
        'suara_nafas',
        'ronki',
        'wheezing',
        'paru_lain_lain',
        // Abdomen
        'distensi',
        'meteorismus',
        'peristaltic',
        'asciles',
        'nyeri_tekan',
        'lokasi',
        // Extrimitas
        'suhu',
        'edema ',
        'extrimitas_lain_lain',

        'hepar',
        'lien',
        'lain_lain',
    ];
}
