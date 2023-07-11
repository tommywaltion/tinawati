<?php

namespace App\Controllers;

use App\Models\FasilitasModel;
use App\Models\StrukturModel;

class Main extends BaseController
{

    protected $strukturModel;
    protected $fasilitasModel;
    public function __construct()
    {
        $this->strukturModel = new StrukturModel();
        $this->fasilitasModel = new FasilitasModel();
    }
    public function homepage()
    {
        $data = [
            'title' => 'Home',
            'homepage' => true,
            'profile' => false,
            'structure' => false,
            'facility' => false,
            'article' => false,
            'kapus' => $this->strukturModel->where('posisi', 'KAPUS')->first(),
            'katu' => $this->strukturModel->where('posisi', 'KASUBAG TU')->first()
        ];

        echo view('homepage', $data);
    }

    public function structure()
    {
        $data = [
            'title' => 'Struktur',
            'homepage' => false,
            'profile' => false,
            'structure' => true,
            'facility' => false,
            'article' => false,
            'kapus' => $this->strukturModel->where('posisi', 'KAPUS')->first(),
            'katu' => $this->strukturModel->where('posisi', 'KASUBAG TU')->first(),
            'dokter' => $this->strukturModel->where('posisi', 'DOKTER')->findAll(),
            'perawat' => $this->strukturModel->where('posisi', 'PERAWAT')->findAll(),
            'farmasi' => $this->strukturModel->where('posisi', 'FARMASI')->findAll(),
            'lab' => $this->strukturModel->where('posisi', 'LAB')->first(),
            'bidan' => $this->strukturModel->where('posisi', 'BIDAN')->findAll(),
            'staff' => $this->strukturModel->where('posisi', 'STAFF')->findAll()
        ];

        echo view('structure', $data);
    }

    public function facility()
    {
        $data = [
            'title' => 'Fasilitas',
            'homepage' => false,
            'profile' => false,
            'structure' => false,
            'facility' => true,
            'article' => false,
            'fasilitas_data' => $this->fasilitasModel->findAll(),
            'data_fasilitas' => $this->fasilitasModel->findAll()
        ];
        echo view('facility', $data);
    }

    public function facility_data()
    {
        $data["data_fasilitas"] = $this->fasilitasModel->findAll();
        echo view('include/template_facility', $data);
    }

    public function article()
    {
        $data = [
            'title' => 'Artikel',
            'homepage' => false,
            'profile' => false,
            'structure' => false,
            'facility' => false,
            'article' => true
        ];
        echo view('article', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Artikel',
            'homepage' => false,
            'profile' => true,
            'structure' => false,
            'facility' => false,
            'article' => false
        ];
        echo view('profile', $data);
    }
}
