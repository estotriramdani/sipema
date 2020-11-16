<?php

namespace App\Models;

use CodeIgniter\Model;

class IsimateriModel extends Model
{
    protected $table = 'isimateris';
    protected $primaryKey = 'id_isimateri';

    protected $allowedFields = ['kode_materi', 'judul', 'isi', 'status'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    // public function getMateri($slug = false)
    // {
    //     if ($slug == false) {
    //         return $this->findAll();
    //     }
    //     return $this->where(['slug' => $slug])->first();
    // }
}
