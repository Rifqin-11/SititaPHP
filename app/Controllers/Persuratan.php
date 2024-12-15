<?php

namespace App\Controllers;

use App\Models\BiodataModel;

class Persuratan extends BaseController
{
    protected $biodataModel;

    public function __construct()
    {
        $this->biodataModel = new BiodataModel();
    }

    // Menampilkan data berdasarkan ID
    public function index($id = null)
    {
        // Ambil data dari model berdasarkan ID
        $biodata = $this->biodataModel->getBiodata($id);

        // Jika data tidak ditemukan
        if (empty($biodata)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data dengan ID $id tidak ditemukan.");
        }

        // Kirimkan data ke view
        return view('pages/persuratan', ['biodata' => $biodata]);
    }
}
