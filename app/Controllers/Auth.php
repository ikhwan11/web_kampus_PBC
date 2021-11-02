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
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $row = $model->getLogin($username, $table);

        if ($row == NULL) {
            return redirect()->to('/auth/login');
        }

        if (password_verify($password, $row->password)) {
            $data = array(
                'nama' => $row->nama,
                'username' => $row->username,
                'role' => $row->role,
            );
            session()->set($data);

            return redirect()->to('/admin_dashboard');
        }
        session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Username atau Password yang anda masukan salah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        return redirect()->to('/auth/login');
    }

    public function logout_act()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
