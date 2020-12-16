<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'user_id';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['email', 'password', 'kode_identitas', 'nama', 'jenis_kelamin', 'alamat', 'foto', 'tempat_lahir', 'tanggal_lahir', 'role_id',];

    protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    public function getUser($email)
    {
        $user = $this->Where('email', $email)
            ->first();
        return $user;
    }
}
