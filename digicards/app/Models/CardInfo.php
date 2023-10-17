<?php

namespace App\Models;

use CodeIgniter\Model;

class CardInfosasad extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'card_info_tb';
    protected $primaryKey       = 'card_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'card_id',
        'company_code',
        'company_name',
        'company_cat',
        'est_date',
        'PAN_no',
        'STN_no',
        'GST_no',
        'cust_copyright',
        'company_logo',
        'company_email',
        'support_email',
        'sup_contact_no',
        'whatsapp_business',
        'website_url',
        'company_map_link',
        'intro_video',
        'portfolio_pdf',
        'catalogue_pdf',
        'about_us',
        'country',
        'state',
        'city',
        'pincode',
        'address',
        'office_longitutde',
        'office_latitutde',
        'enable'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
