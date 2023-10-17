<?php

namespace App\Models;

use CodeIgniter\Model;

class CardModel extends Model
{
    protected $table = 'card_info_tb';
    protected $primaryKey = 'card_id';
    protected $allowedFields = [
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
		'map_link',
		'enable'
    ];
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    // public function detailby($id) {
    //     $db = \Config\Database::connect();
    //     $builder = $db->table('customer_tb');
	// 	$builder->select('*');
	// 	$builder->join('card_info_tb', 'card_info_tb.company_code = customer_tb.company_code');
	// 	$builder->join('card_team_tb', 'card_team_tb.company_code = customer_tb.company_code');
	// 	$builder->join('card_social_link_tb', 'card_social_link_tb.company_code = customer_tb.company_code');
	// 	$builder->join('card_product_tb', 'card_product_tb.company_code = customer_tb.company_code');
	// 	$builder->join('card_service_tb', 'card_service_tb.company_code = customer_tb.company_code');
	// 	$builder->join('card_catalogue_tb', 'card_catalogue_tb.company_code = customer_tb.company_code');
	// 	$builder->join('card_gallery_tb', 'card_gallery_tb.company_code = customer_tb.company_code');
	// 	$builder->join('card_payment_tb', 'card_payment_tb.company_code = customer_tb.company_code');
	// 	$builder->where('customer_tb.company_code', $id);
	// 	$builder->distinct();
    //     return $builder->get()->getResult();
    // }
}