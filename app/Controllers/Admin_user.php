<?php

namespace App\Controllers;

use App\Models\Mod_user;

class Admin_user extends BaseController
{

    protected $userModel;
    public function __construct()
    {
        $this->userModel = new Mod_user();
    }

    public function index()
    {
        $data = [
            'user_data' => $this->userModel->findAll()
        ];
        return view('back_end/user', $data);
    }
    public function detail($id)
    {
        $data = [
            'user_data' => $this->userModel->getData($id)
        ];
        return view('back_end/user_detail', $data);
    }

    // create data
    public function create()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('back_end/user_tambah', $data);
    }

    public function create_act()
    {
        if (!$this->validate([

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[tb_user.username]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah ada.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Admin_user/create')->withInput()->with('validation', $validation);
        }

        $this->userModel->save([
            'nama' => $this->request->getVar('nama'),
            'role' => $this->request->getVar('role'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        data user berhasil ditambah.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        return redirect()->to('/Admin_user');
    }

    // end create

    // update
    public function edit($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'user_data' => $this->userModel->getData($id)
        ];
        return view('back_end/user_edit', $data);
    }

    public function edit_act($id)
    {
        $old_data = $this->userModel->getData($id);
        if ($old_data['username'] == $this->request->getVar('username')) {
            $rule_username = 'required';
        } else {
            $rule_username = 'required|is_unique[tb_user.username]';
        }

        if (!$this->validate([

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'username' => [
                'rules' => $rule_username,
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah ada.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Admin_user/edit/' . $this->request->getVar('id'))->withInput()->with('validation', $validation);
        }

        $this->userModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'role' => $this->request->getVar('role'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        data user berhasil diubah.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        return redirect()->to('/Admin_user');
    }

    // end update
    public function delete($id)
    {
        $this->userModel->delete($id);

        session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        data user berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        return redirect()->to('/admin_user');
    }

    public function Upass()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('back_end/user_Upass', $data);
    }

    public function Upass_act()
    {

        if (!$this->validate([

            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} baru harus diisi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Admin_user/Upass/')->withInput()->with('validation', $validation);
        }

        $this->userModel->save([
            'id' => $this->request->getVar('id'),
            'password' => $this->request->getVar('password'),
        ]);

        session()->setFlashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        password berhasil diubah.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        return redirect()->to('/Admin_user/Upass');
    }
}
