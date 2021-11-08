<?php

namespace App\Controllers;

use App\Models\Mod_blog;

class Admin_blog extends BaseController
{

    protected $blogModel;
    public function __construct()
    {
        $this->blogModel = new Mod_blog();
    }
    public function index()
    {
        $currentPage = $this->request->getVar('page_tb_blog') ? $this->request->getVar('page_tb_blog') : 1;
        $data = [
            'blog_data' => $this->blogModel->paginate(5, 'tb_blog'),
            'pager' => $this->blogModel->pager,
            'currentPage' => $currentPage
        ];
        return view('back_end/blog', $data);
    }

    // create

    public function create()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('back_end/blog_tambah', $data);
    }

    public function create_act()
    {
        if (!$this->validate([

            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi.'
                ]
            ],
            'admin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama admin harus diisi.'
                ]
            ],
            // 'banner' => [
            //     'rules' => 'uploaded[banner]|is_image[banner]|mime_in[banner],image/jpg,image/jpeg,image/png]',
            //     'errors' => [
            //         'uploaded' => 'Pilih banner terlebih dahulu',
            //         'is_image' => 'Ini bukan file banner',
            //         'mime_in' => 'Format banner tidak cocok',
            //     ]
            // ],
        ])) {

            return redirect()->to('/Admin_blog/create')->withInput();
        }

        // kelola file
        $filebanner = $this->request->getFile('banner');
        // ambil nama file
        $namabanner = $filebanner->getName();

        // pindah file
        $filebanner->move('assets/img/blog');


        $this->blogModel->save([
            'judul' => $this->request->getVar('judul'),
            'tanggal' => $this->request->getVar('tanggal'),
            'admin' => $this->request->getVar('admin'),
            'kategori' => $this->request->getVar('kategori'),

            // paragraf
            'paragraf_1' => $this->request->getVar('p_1'),
            'paragraf_2' => $this->request->getVar('p_2'),
            'paragraf_3' => $this->request->getVar('p_3'),
            'paragraf_4' => $this->request->getVar('p_4'),
            'paragraf_5' => $this->request->getVar('p_5'),
            'paragraf_6' => $this->request->getVar('p_6'),
            'paragraf_7' => $this->request->getVar('p_7'),

            'gambar' => $namabanner,
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Artikel berhasil ditambahkan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        return redirect()->to('/Admin_blog');
    }


    // edit
    public function edit($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'blog_data' => $this->blogModel->getData($id)
        ];
        return view('back_end/blog_edit', $data);
    }

    public function edit_act($id)
    {
        if (!$this->validate([

            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi.'
                ]
            ],
            'admin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama admin harus diisi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Admin_blog/edit/' . $this->request->getVar('id'))->withInput()->with('validation', $validation);
        }

        // kelola file
        $filebanner = $this->request->getFile('banner');

        if ($filebanner->getError() == 4) {
            $namabanner = $this->request->getVar('fotoLama');
        } else {
            $namabanner = $filebanner->getName();
            $filebanner->move('assets/img/blog');
        }


        $this->blogModel->save([
            'id_blog' => $id,
            'judul' => $this->request->getVar('judul'),
            'tanggal' => $this->request->getVar('tanggal'),
            'admin' => $this->request->getVar('admin'),
            'kategori' => $this->request->getVar('kategori'),

            // paragraf
            'paragraf_1' => $this->request->getVar('p_1'),
            'paragraf_2' => $this->request->getVar('p_2'),
            'paragraf_3' => $this->request->getVar('p_3'),
            'paragraf_4' => $this->request->getVar('p_4'),
            'paragraf_5' => $this->request->getVar('p_5'),
            'paragraf_6' => $this->request->getVar('p_6'),
            'paragraf_7' => $this->request->getVar('p_7'),

            'gambar' => $namabanner,
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Artikel berhasil diupdate.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        return redirect()->to('/Admin_blog');
    }

    public function delete($id)
    {
        // hapus file
        $blog = $this->blogModel->find($id);
        unlink('assets/img/blog/' . $blog['gambar']);

        $this->blogModel->delete($id);

        session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Artikel berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/admin_blog');
    }
}
