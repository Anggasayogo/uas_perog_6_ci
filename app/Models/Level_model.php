<?php

namespace App\Models;

use CodeIgniter\Model;

class Level_model extends Model {
    protected $table = 'level';

    public function getLevel($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_level' => $id]);
        }
    }

}