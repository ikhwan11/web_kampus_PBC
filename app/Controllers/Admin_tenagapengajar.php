<?php

namespace App\Controllers;

use App\Models\Mod_dosen;
use App\Models\Mod_pengalaman;

class Admin_tenagapengajar extends BaseController
{

    protected $dosenModel;
    protected $pengalamanModel;
    public function __construct()
    {
        $this->dosenModel = new Mod_dosen();
        $this->pengalamanModel = new Mod_pengalaman();
    }


    public function index()
    {
        $currentPage = $this->request->getVar('page_tb_dosen') ? $this->request->getVar('page_tb_dosen') : 1;

        // search
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $dosen = $this->dosenModel->search('keyword');
        } else {
            $dosen =  $this->dosenModel;
        }

        $data = [
            'dosen_data' => $dosen->paginate(5, 'tb_dosen'),
            'pager' => $this->dosenModel->pager,
            'currentPage' => $currentPage
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

    // pengalaman section
    public function pengalaman()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('back_end/tenaga_pengajar_pengalaman', $data);
    }

    public function pengalaman_create()
    {
        if (!$this->validate([

            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan harus diisi.'
                ]
            ],
            'perusahaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama perusahaan harus diisi.',
                ]
            ],
            'tm' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun mulai Hp harus diisi.'
                ]
            ],
            'ts' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun selesai email harus diisi.',
                ]
            ],
        ])) {
            return redirect()->to('/Admin_tenagapengajar/pengalaman')->withInput();
        }

        $this->pengalamanModel->save([
            'id_pengajar' => $this->request->getVar('id_pengajar'),
            'jabatan' => $this->request->getVar('jabatan'),
            'perusahaan' => $this->request->getVar('perusahaan'),
            'tahun_mulai' => $this->request->getVar('tm'),
            'tahun_selesai' => $this->request->getVar('ts'),
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Pengalaman berhasil ditambahkan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        return redirect()->to('/Admin_tenagapengajar/pengalaman');
    }
}
