<?php

namespace App\Models;

use CodeIgniter\Model;

class SocialModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'card_social_link_tb';
    protected $primaryKey       = 'social_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'company_code',
        'company_name',
        'icon_img',
        'channel_name',
        'channel_url',
        'icon_visibility',
        'enable'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
