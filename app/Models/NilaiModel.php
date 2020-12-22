<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
    protected $table      = 'nilais';
    protected $primaryKey = 'id_nilai';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['email', 'kode_materi', 'nilai'];

    protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}
