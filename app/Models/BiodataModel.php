<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = 'biodata';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nim', 'alamat', 'konsentrasi', 'semester', 'ipk', 'ipks', 'sks', 'sks_semester', 'instansi', 'alamat_instansi', 'judulkp', 'dospem', 'dosen1', 'dosen2', 'dosen3'];

    public function getBiodata($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    public function getBiodataByUserId($userId)
    {
        return $this->where('user_id', $userId)->findAll();
    }
}
