<?php

namespace App\Controllers;

use App\Models\Mod_lt;
use App\Models\Mod_ltss;

class LapTahunan extends BaseController
{
    protected $ltModel;
    protected $ltssModel;
    public function __construct()
    {
        $this->ltModel = new Mod_lt();
        $this->ltssModel = new Mod_ltss();
    }

    public function index()
    {
        $this->ltModel->orderBy('id_lap', 'DESC');

        $currentPage = $this->request->getVar('page_tb_lt') ? $this->request->getVar('page_tb_lt') : 1;
        $data = [
            'lap_data' => $this->ltModel->paginate(5, 'tb_lt'),
            'pager' => $this->ltModel->pager,
            'currentPage' => $currentPage
        ];
        return view('front_end/lapTahunan', $data);
    }

    public function detail($id)
    {
        $db = db_connect();
        $data = [
            'lap_data' => $this->ltModel->getDataAja($id),
            'ss_data' => $db->query("SELECT * FROM tb_sslaptahunan WHERE tb_sslaptahunan.id_lap ='$id'")->getResultArray()
        ];
        return view('front_end/lapTahunan_detail', $data);
    }
}
