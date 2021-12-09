<?php

namespace App\Controllers;

use App\Models\Mod_spmi;

class Admin_spmi extends BaseController
{
    protected $spmiModel;
    public function __construct()
    {
        $this->spmiModel = new Mod_spmi();
    }

    // standar mutu
    // ----- kebijakan mutu

    public function standar_mutu()
    {
        $db = db_connect();
        $data = [
            'sop_data' => $db->query("SELECT * FROM tb_dokumen WHERE jenis_dk_tambahan = 'SOP' ORDER BY id_dk DESC")->getResultArray(),
            'formulir_data' => $db->query("SELECT * FROM tb_dokumen WHERE jenis_dk_tambahan = 'Formulir' ORDER BY id_dk DESC")->getResultArray(),
            'kebijakan_data' => $db->query("SELECT * FROM tb_dokumen WHERE jenis_dk_tambahan = 'Kebijakan Mutu' ORDER BY id_dk DESC")->getResultArray(),
            'manual_data' => $db->query("SELECT * FROM tb_dokumen WHERE jenis_dk_tambahan = 'Manual Mutu' ORDER BY id_dk DESC")->getResultArray(),
            'standar_data' => $db->query("SELECT * FROM tb_dokumen WHERE jenis_dk_tambahan = 'Standar Mutu' ORDER BY id_dk DESC")->getResultArray(),
        ];
        return view('back_end/spmi_standarMutu', $data);
    }


    // laporan MONEV

    public function lap_monev()
    {
        return view('back_end/spmi_lapMonev');
    }

    // laporan AMI

    public function lap_ami()
    {
        $db = db_connect();
        $data = [
            'ami_data' => $db->query("SELECT * FROM tb_dokumen WHERE id_spmi = '3' ORDER BY id_dk DESC ")->getResultArray(),
        ];
        return view('back_end/spmi_lapAmi', $data);
    }



    // laporan RTM

    public function lap_rtm()
    {
        $db = db_connect();
        $data = [
            'rtm_data' => $db->query("SELECT * FROM tb_dokumen WHERE id_spmi = '4' ORDER BY id_dk DESC ")->getResultArray(),
        ];
        return view('back_end/spmi_lapRtm', $data);
    }



    // ______________________ DOKUMEN LAPORAN KINERJA ____________________________________________

    public function lap_rmbs()
    {
        $db = db_connect();
        $data = [
            'rmbs_data' => $db->query("SELECT * FROM tb_dokumen WHERE jenis_dk_tambahan = 'Kegiatan' ORDER BY id_dk DESC ")->getResultArray(),
        ];
        return view('back_end/kinerja_rmbs', $data);
    }

    public function lap_ikm()
    {
        $db = db_connect();
        $data = [
            'dokumen_data' => $db->query("SELECT * FROM tb_dokumen WHERE jenis_dk_tambahan = 'IKM' ORDER BY id_dk DESC ")->getResultArray(),
        ];
        return view('back_end/kinerja_ikm', $data);
    }

    public function lap_ikjd()
    {
        $db = db_connect();
        $data = [
            'dokumen_data' => $db->query("SELECT * FROM tb_dokumen WHERE jenis_dk_tambahan = 'IKJD' ORDER BY id_dk DESC ")->getResultArray(),
        ];
        return view('back_end/kinerja_ikjd', $data);
    }

    public function lap_ikd()
    {
        $db = db_connect();
        $data = [
            'dokumen_data' => $db->query("SELECT * FROM tb_dokumen WHERE jenis_dk_tambahan = 'IKD' ORDER BY id_dk DESC ")->getResultArray(),
        ];
        return view('back_end/kinerja_ikd', $data);
    }

    // --------------------------------------------------------------------------------------------

    public function download_dokumen($id)
    {
        $data = $this->spmiModel->find($id);
        return $this->response->download('assets/img/spmi/' . $data['file_dk'], null);
    }


    // create dokumen

    public function create()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('back_end/spmi_tambah', $data);
    }

    public function create_act()
    {
        if (!$this->validate([

            'id_spmi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis SPMI harus diisi.'
                ]
            ],
            'nama_dok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama dokumen harus diisi.'
                ]
            ],
            'dokumen' => [
                'rules' => 'uploaded[dokumen]|max_size[dokumen,5120]|ext_in[dokumen,pdf,docx]',
                'errors' => [
                    'uploaded' => 'Dokumen wajib di isi',
                    'max_size' => 'Ukuran dokumen terlalu besar',
                    'ext_in' => 'Format dokumen tidak didukung',
                ]
            ],
        ])) {
            return redirect()->to('/Admin_spmi/create')->withInput();
        }


        // dokumen
        $fileDokumen = $this->request->getFile('dokumen');
        $namaDokumen = $fileDokumen->getName();
        $fileDokumen->move('assets/img/spmi');

        $this->spmiModel->save([
            'id_spmi' => $this->request->getVar('id_spmi'),
            'jenis_dk_tambahan' => $this->request->getVar('j_tambahan'),
            'nama_dk' => $this->request->getVar('nama_dok'),
            'tahun_akademik' => $this->request->getVar('ta'),
            'file_dk' => $namaDokumen,

        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Dokumen berhasil ditambah.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        return redirect()->to('/Admin_spmi/create');
    }
}
