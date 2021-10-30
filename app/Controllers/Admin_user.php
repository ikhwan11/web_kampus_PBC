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
        return view('back_end/user');
    }
    public function detail()
    {
        return view('back_end/user_detail');
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

        session()->setFlashdata('pesan', 'Data user berhasil ditambahkan.');

        return redirect()->to('/Admin_user');
    }

    // end create

    public function edit()
    {
        return view('back_end/user_edit');
    }
}
