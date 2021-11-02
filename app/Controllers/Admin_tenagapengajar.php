<?php

namespace App\Controllers;

use App\Models\Mod_dosen;

class Admin_tenagapengajar extends BaseController
{

    protected $dosenModel;
    public function __construct()
    {
        $this->dosenModel = new Mod_dosen();
    }
    public function index()
    {
        $data = [
            'dosen_data' => $this->dosenModel->findAll()
        ];
        return view('back_end/tenaga_pengajar', $data);
    }

    public function detail($id)
    {
        $data = [
            'dosen_data' => $this->dosenModel->getData($id)
        ];
        return view('back_end/tenaga_pengajar_detail', $data);
    }

    // create
    public function create()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('back_end/tenaga_pengajar_tambah', $data);
    }

    public function create_act()
    {
        if (!$this->validate([

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat lahir harus diisi.',
                ]
            ],
            'no_hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Hp harus diisi.'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat email harus diisi.',
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus diisi.'
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
            // $validation = \Config\Services::validation();
            return redirect()->to('/Admin_tenagapengajar/create')->withInput();
        }

        // kelola file
        $fileFoto = $this->request->getFile('foto');
        // ambil nama file
        $namaFoto = $fileFoto->getName();

        // pindah file
        $fileFoto->move('assets/img/dosen');


        $this->dosenModel->save([
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jk'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'alamat_asal' => $this->request->getVar('alamat'),
            'jabatan' => $this->request->getVar('jabatan'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
            'foto' => $namaFoto,
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        data user berhasil ditambah.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        return redirect()->to('/Admin_tenagapengajar');
    }

    // end create
    // edit
    public function edit($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'dosen_data' => $this->dosenModel->getData($id)
        ];
        return view('back_end/tenaga_pengajar_edit', $data);
    }

    public function edit_act($id)
    {
        if (!$this->validate([

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat lahir harus diisi.',
                ]
            ],
            'no_hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Hp harus diisi.'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat email harus diisi.',
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus diisi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Admin_tenagapengajar/edit/' . $this->request->getVar('id'))->withInput()->with('validation', $validation);
        }

        $this->dosenModel->save([
            'id_pengajar' => $id,
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jk'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'alamat_asal' => $this->request->getVar('alamat'),
            'jabatan' => $this->request->getVar('jabatan'),
            'no_hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email'),
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        data dosen berhasil diubah.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        return redirect()->to('/Admin_tenagapengajar');
    }
    // end edit

    public function delete($id)
    {

        // hapus file
        $dosen = $this->dosenModel->find($id);
        unlink('/assets/img/dosen/' . $dosen['foto']);

        $this->dosenModel->delete($id);

        session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        data dosen berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/admin_tenagapengajar');
    }

    public function update_foto($id)
    {
        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            $namaFoto = $fileFoto->getName();
            $fileFoto->move('assets/img/dosen');
        }
        $this->dosenModel->save([
            'id_pengajar' => $id,
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Foto berhasil diganti.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/admin_tenagapengajar');
    }
}
