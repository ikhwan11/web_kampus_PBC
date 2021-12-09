<?php

namespace App\Controllers;

use App\Models\Mod_lt;
use App\Models\Mod_ltss;

class Admin_lapTahunan extends BaseController
{
    protected $lapModel;
    protected $lapssModel;
    public function __construct()
    {
        $this->lapModel = new Mod_lt();
        $this->lapssModel = new Mod_ltss();
    }
    public function index()
    {
        $this->lapModel->orderBy('id_lap', 'DESC');
        $currentPage = $this->request->getVar('page_tb_laptahunan') ? $this->request->getVar('page_tb_laptahunan') : 1;
        $data = [
            'lap_data' => $this->lapModel->paginate(6, 'tb_laptahunan'),
            'pager' => $this->lapModel->pager,
            'currentPage' => $currentPage
        ];
        return view('back_end/laporan_tahunan', $data);
    }

    // tambah
    public function create()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('back_end/laporan_tahunanTambah', $data);
    }

    public function create_act()
    {
        if (!$this->validate([

            'nama_lap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama laporan harus diisi.'
                ]
            ],

            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih foto terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar',
                    'is_image' => 'Ini bukan file gambar',
                    'mime_in' => 'Format foto tidak cocok',
                ]
            ],
            'dokumen' => [
                'rules' => 'uploaded[dokumen]|max_size[dokumen,2048]|ext_in[dokumen,pdf,docx]',
                'errors' => [
                    'uploaded' => 'Dokumen wajib di isi',
                    'max_size' => 'Ukuran dokumen terlalu besar',
                    'ext_in' => 'Format dokumen tidak didukung',
                ]
            ],
        ])) {
            return redirect()->to('/Admin_lapTahunan/create')->withInput();
        }

        // cover
        $fileFoto = $this->request->getFile('foto');
        $namaFoto = $fileFoto->getName();
        $fileFoto->move('assets/img/lapTahunan');

        // dokumen
        $fileDokumen = $this->request->getFile('dokumen');
        $namaDokumen = $fileDokumen->getName();
        $fileDokumen->move('assets/img/lapTahunan/dokumen');

        $this->lapModel->save([
            'nama_lap' => $this->request->getVar('nama_lap'),
            'kreator' => $this->request->getVar('creator'),
            'cover' => $namaFoto,
            'file_laporan' => $namaDokumen,

            // paragraf
            'paragraf_1' => $this->request->getVar('p_1'),
            'paragraf_2' => $this->request->getVar('p_2'),
            'paragraf_3' => $this->request->getVar('p_3'),
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        data laporan tahunan berhasil ditambah.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        return redirect()->to('/Admin_lapTahunan');
    }

    // edit
    public function edit($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'lap_data' => $this->lapModel->getDataAja($id)
        ];
        return view('back_end/laporan_tahunanEdit', $data);
    }

    public function edit_act($id)
    {
        if (!$this->validate([

            'nama_lap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama laporan harus diisi.'
                ]
            ],

            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran file terlalu besar',
                    'is_image' => 'Ini bukan file gambar',
                    'mime_in' => 'Format foto tidak cocok',
                ]
            ],
            'dokumen' => [
                'rules' => 'max_size[dokumen,2048]|ext_in[dokumen,pdf,docx]',
                'errors' => [
                    'max_size' => 'Ukuran dokumen terlalu besar',
                    'ext_in' => 'Format dokumen tidak didukung',
                ]
            ],
        ])) {
            return redirect()->to('/Admin_lapTahunan/edit/' . $this->request->getVar('id_lap'))->withInput();
        }

        // cover
        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            $namaFoto = $fileFoto->getName();
            $fileFoto->move('assets/img/lapTahunan');
            unlink('assets/img/lapTahunan/' . $this->request->getVar('fotoLama'));
        }

        // dokumen
        $fileDokumen = $this->request->getFile('dokumen');

        if ($fileDokumen->getError() == 4) {
            $namaDokumen = $this->request->getVar('dokumenLama');
        } else {
            $namaDokumen = $fileDokumen->getName();
            $fileDokumen->move('assets/img/lapTahunan/dokumen');
            unlink('assets/img/lapTahunan/dokumen/' . $this->request->getVar('dokumenLama'));
        }

        $this->lapModel->save([
            'id_lap' => $id,
            'nama_lap' => $this->request->getVar('nama_lap'),
            'kreator' => $this->request->getVar('creator'),
            'cover' => $namaFoto,
            'file_laporan' => $namaDokumen,

            // paragraf
            'paragraf_1' => $this->request->getVar('p_1'),
            'paragraf_2' => $this->request->getVar('p_2'),
            'paragraf_3' => $this->request->getVar('p_3'),
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        data laporan tahunan berhasil diupdate.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        return redirect()->to('/Admin_lapTahunan');
    }

    // delete
    public function delete($id)
    {
        // hapus file
        $cover = $this->lapModel->find($id);
        unlink('assets/img/lapTahunan/' . $cover['cover']);
        unlink('assets/img/lapTahunan/dokumen/' . $cover['file_laporan']);

        $this->lapModel->delete($id);

        session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Laporan berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/admin_lapTahunan');
    }

    // ss
    public function ss($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'lap_data' => $this->lapModel->getDataAja($id)
        ];
        return view('back_end/laporan_tahunanSs', $data);
    }

    public function create_ss()
    {
        if (!$this->validate([

            'nama_ss' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama gambar harus diisi.'
                ]
            ],

            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih foto terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar',
                    'is_image' => 'Ini bukan file gambar',
                    'mime_in' => 'Format foto tidak cocok',
                ]
            ],
        ])) {
            return redirect()->to('/Admin_lapTahunan/ss/' . $this->request->getVar('id_lap'))->withInput();
        }

        // cover
        $fileFoto = $this->request->getFile('foto');
        $namaFoto = $fileFoto->getName();
        $fileFoto->move('assets/img/lapTahunan/ss');


        $this->lapssModel->save([
            'nama_ss' => $this->request->getVar('nama_ss'),
            'id_lap' => $this->request->getVar('id_lap'),
            'file_ss' => $namaFoto,
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Screenshot berhasil ditambah.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        return redirect()->to('/Admin_lapTahunan/ss/' . $this->request->getVar('id_lap'));
    }

    function download($id)
    {
        $data = $this->lapModel->find($id);
        return $this->response->download('assets/img/lapTahunan/dokumen/' . $data['file_laporan'], null);
    }
}
