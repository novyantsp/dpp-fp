<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormAll;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $formAll = FormAll::all();
        // // dd($formAll);
        // return view('pages.daftar_pasien', compact('formAll'));
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.input_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'sex'=>'required|numeric|digits:1',
            'no_rm'=>'required',
            'birth'=>'required',
            'usia'=>'required',
            'alamat'=>'required',
            'tgl_asesmen' => 'required'
        ]);

        $formAll = new FormAll([
            'nama' => $request->get('nama'),
            'sex' => $request->get('sex'),
            'no_rm' => $request->get('no_rm'),
            'birth' => $request->get('birth'),
            'usia' => $request->get('usia'),
            'alamat' => $request->get('alamat'),
            //---Data Medis
            'tgl_asesmen' => $request->get('tgl_asesmen'),
            'rencana_kerja' => $request->get('rencana_kerja'),
            'hasil_pemeriksaan_penunjang' => $request->get('hasil_pemeriksaan_penunjang'),
            'diagnosis' => $request->get('diagnosis'),
            'terapi' => $request->get('terapi'),
            'hasil_pembedahan' => $request->get('hasil_pembedahan'),
            'saran' => $request->get('saran'),
            'catatan' => $request->get('catatan'),
            'ttd' => $request->get('ttd'),
            // Anamnesis
            'keluhan_utama' => $request->get('keluhan_utama'),
            'riwayat_penyakit_sekarang' => $request->get('riwayat_penyakit_sekarang'),
            'riwayat_pengobatan' => $request->get('riwayat_pengobatan'),
            // --- Pemeriksaan Fisik
            // Mata
            'anemia' => $request->get('anemia'),
            'ikterus' => $request->get('ikterus'),
            'reflek_pupil' => $request->get('reflek_pupil'),
            'edema_palpebrae' => $request->get('edema_palpebrae'),
            // THT
            'tonsil' => $request->get('tonsil'),
            'faring' => $request->get('faring'),
            'lidah' => $request->get('lidah'),
            'bibir' => $request->get('bibir'),
            // Leher
            'jvp' => $request->get('jvp'),
            'pembesaran_kelenjar' => $request->get('pembesaran_kelenjar'),
            'kaku_kuduk' => $request->get('kaku_kuduk'),
            // Jantung
            's1_s2' => $request->get('s1_s2'),
            'reguler' => $request->get('reguler'),
            'murmur' => $request->get('murmur'),
            'jantung_lain_lain' => $request->get('jantung_lain_lain'),
            // Paru
            'suara_nafas' => $request->get('suara_nafas'),
            'ronki' => $request->get('ronki'),
            'wheezing' => $request->get('wheezing'),
            'paru_lain_lain' => $request->get('paru_lain_lain'),
            // Abdomen
            'distensi' => $request->get('distensi'),
            'meteorismus' => $request->get('meteorismus'),
            'peristaltic' => $request->get('peristaltic'),
            'asciles' => $request->get('asciles'),
            'nyeri_tekan' => $request->get('nyeri_tekan'),
            'lokasi' => $request->get('lokasi'),
            // Extrimitas
            'suhu' => $request->get('suhu'),
            'edema' => $request->get('edema'),
            'extrimitas_lain_lain' => $request->get('extrimitas_lain_lain'),

            'hepar' => $request->get('hepar'),
            'lien' => $request->get('lien'),
            'lain_lain' => $request->get('lain_lain'),
        ]);

        // dd($formAll);
        $formAll->save();
        return redirect('/pasien')->with('success', 'Pasien saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
