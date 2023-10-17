<?php

namespace App\Models;

use CodeIgniter\Model;

class CatalogueModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'card_catalogue_tb';
    protected $primaryKey       = 'catalogue_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
		'company_code',
		'company_name',
		'ccategory_name',
		'clist_view',
		'position',
		'cname',
		'cdetails',
		'cprice',
		'catalogue_img',
		'characteristcs',
		'enable'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
