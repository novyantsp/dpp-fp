<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormAll extends Model
{
    // protected $attributes = array(
    //     'nama'  => 'none',
    //     'sex'  => 'none',
    //     'no_rm'  => 'none',
    //     'birth'  => 'none',
    //     'usia'  => 'none',
    //     'alamat'  => 'none',
    //     // --- Data Medis
    //     'tgl_asesmen' => 'none',
    //     'rencana_kerja' => 'none',
    //     'hasil_pemeriksaan_penunjang' => 'none',
    //     'diagnosis' => 'none',
    //     'terapi' => 'none',
    //     'hasil_pembedahan' => 'none',
    //     'saran' => 'none',
    //     'catatan' => 'none',
    //     'ttd' => 'none',
    //     // Anamnesis
    //     'keluhan_utama' => 'none',
    //     'riwayat_penyakit_sekarang' => 'none',
    //     'riwayat_pengobatan' => 'none',
    //     // --- Pemeriksaan Fisik
    //     // Mata
    //     'anemia' => 'none',
    //     'ikterus' => 'none',
    //     'reflek_pupil' => 'none',
    //     'edema_palpebrae' => 'none',
    //     // THT
    //     'tonsil' => 'none',
    //     'faring' => 'none',
    //     'lidah' => 'none',
    //     'bibir' => 'none',
    //     // Leher
    //     'jvp'  => 'none',
    //     'pembesaran_kelenjar' => 'none',
    //     'kaku_kuduk' => 'none',
    //     // Jantung
    //     's1_s2' => 'none',
    //     'reguler' => 'none',
    //     'murmur' => 'none',
    //     'jantung_lain_lain' => 'none',
    //     // Paru
    //     'suara_nafas' => 'none',
    //     'ronki' => 'none',
    //     'wheezing' => 'none',
    //     'paru_lain_lain' => 'none',
    //     // Abdomen
    //     'distensi' => 'none',
    //     'meteorismus' => 'none',
    //     'peristaltic' => 'none',
    //     'asciles' => 'none',
    //     'nyeri_tekan' => 'none',
    //     'lokasi' => 'none',
    //     // Extrimitas
    //     'suhu' => 'none',
    //     'edema' => 'none',
    //     'extrimitas_lain_lain' => 'none',

    //     'hepar' => 'none',
    //     'lien' => 'none',
    //     'lain_lain' => 'none',
    // );

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
        'edema',
        'extrimitas_lain_lain',

        'hepar',
        'lien',
        'lain_lain',
    ];
}
