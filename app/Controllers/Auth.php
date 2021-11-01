<?php

namespace App\Controllers;

use App\Models\Mod_login;

class Auth extends BaseController
{
    public function login()
    {

        return view('back_end/login');
    }


    public function login_act()
    {

        $model = new Mod_login();
        $table = 'tb_user';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $row = $model->getLogin($username, $table);

        if ($row == NULL) {
            return redirect()->to('/auth/login');
        }

        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => TRUE,
                'nama' => $row->nama,
                'username' => $row->username,
                'role' => $row->role,
            );
            session()->set($data);

            return redirect()->to('/Admin_dashboard');
        }
        session()->setFlashdata('pesan', 'Username atau Password salah');
        return redirect()->to('/auth/login');
    }

    public function logout_act()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
