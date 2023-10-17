<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'card_team_tb';
    protected $primaryKey       = 'cteam_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'company_code',
        'company_name',
        'team_name',
        'designation',
        'card_category',
        'userUID',
        'firstname',
        'lastname',
        'username',
        'email',
        'email_otp',
        'mobile_no',
        'team_password',
        'profile_image',
        'whatsapp_business',
        'alternate_no',
        'about',
        'enable'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
