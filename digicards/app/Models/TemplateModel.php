<?php

namespace App\Models;

use CodeIgniter\Model;

class TemplateModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'template_tb';
    protected $primaryKey       = 'template_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'temp_name',
        'temp_cat',
        'temp_preview',
        'enable'
    ];
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function gettempcategory() {
        $db = \Config\Database::connect();
        $builder = $db->table('tempcategory_tb');
        return $builder->get()->getResult();
    }
    public function getcardtemplate() {
        $db = \Config\Database::connect();
        $builder = $db->table('card_template_tb');
        return $builder->get()->getResult();
    }

}
