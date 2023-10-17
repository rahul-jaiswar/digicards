<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer_tb';
    protected $primaryKey = 'cust_id';
    protected $allowedFields = [
        'company_code',
        'lead_channel',
        'profile_image',
        'card_category',
        'card_material',
        'firstname',
        'lastname',
        'username',
        'company_cat',
        'company_name',
        'company_url',
        'email',
        'email_otp',
        'mobile_no',
        'password',
        'enable'
    ];
    protected $returnType     = 'array';

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}