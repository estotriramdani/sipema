<?php

namespace App\Models;

use CodeIgniter\Model;


class MateriModel extends Model
{
    protected $table      = 'materis';
    protected $primaryKey = 'kode_materi';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kode_materi', 'judul', 'isi', 'status'];

    protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}
