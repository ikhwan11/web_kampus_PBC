<?php

namespace App\Controllers;

use App\Models\Mod_user;

class Auth extends BaseController
{
  public function login()
  {
    return view('back_end/login');
  }


  public function login_act()
  {
    $model = new Mod_user();
    $table = 'tb_user';
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $row = $model->login($username, $table);

    if ($row == NULL) {
      session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Masukan Username dan Password
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      return redirect()->to('/auth/login');
    }

    if ($password ==  $row->password) {
      $data = array(
        'log' => TRUE,
        'nama' => $row->nama,
        'role' => $row->role,
        'username' => $row->username,
      );
      session()->set($data);
      return redirect()->to('/admin_dashboard');
    } else {
      session()->setFlashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Username atau Password yang anda masukan salah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      return redirect()->to('/auth/login');
    }
  }

  public function logout_act()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('/');
  }
}
