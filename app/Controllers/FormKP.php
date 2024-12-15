<?php

namespace App\Controllers;

use App\Models\BiodataModel;

class FormKP extends BaseController
{
    public function index()
    {
        return view('partials/formkp');
    }

    public function submit()
    {
        // Ambil data dari form
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'konsentrasi' => $this->request->getPost('konsentrasi'),
            'instansi' => $this->request->getPost('instansi'),
            'alamat_instansi' => $this->request->getPost('alamat-instansi'),
            'dosen1' => $this->request->getPost('dosen1'),
            'dosen2' => $this->request->getPost('dosen2'),
            'dosen3' => $this->request->getPost('dosen3'),
        ];

        // Validasi data
        if ($this->validate([
            'nama' => 'required',
            'nim' => 'required',
            'konsentrasi' => 'required',
            'instansi' => 'required',
            'alamat_instansi' => 'required',
        ])) {
            // Simpan data ke database
            $biodataModel = new BiodataModel();
            if ($biodataModel->insert($data)) {
                return redirect()->to('/formkp')->with('success', 'Data berhasil disimpan.');
            } else {
                $db = \Config\Database::connect();
                $error = $db->error();
                return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $error['message']);
            }
        } else {
            // Jika validasi gagal, kembalikan ke form dengan pesan error
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }
}
