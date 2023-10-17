<?php

namespace App\Models;

use CodeIgniter\Model;

class ExpensesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'expenses_tb';
    protected $primaryKey       = 'expenses_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
		'company_code',
		'company_name',
		'cpcategory_name',
		'clist_view',
		'pname',
		'pdetails',
		'pprice',
		'product_img',
		'pcharacteristcs',
		'pcharavalue',
		'enable'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
