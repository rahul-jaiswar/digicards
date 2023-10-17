<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CardModel extends CI_Model {

	protected $tb_template;
    protected $tb_info;
    protected $tb_team;
    protected $tb_social;
    protected $tb_service;
    protected $tb_product;
    protected $tb_payment;
    protected $tb_order;
    protected $tb_gallery;
    protected $tb_category;
    protected $tb_catalogue;

    function __construct() {
        $this->tb_template = 'card_template_tb';
        $this->tb_info = 'card_info_tb';
        $this->tb_team = 'card_team_tb';
        $this->tb_social = 'card_social_link_tb';
        $this->tb_service = 'card_service_tb';
        $this->tb_product = 'card_product_tb';
        $this->tb_payment = 'card_payment_tb';
        $this->tb_order = 'card_order_tb';
        $this->tb_gallery = 'card_gallery_tb';
        $this->tb_category = 'card_category';
        $this->tb_catalogue = 'card_catalogue_tb';
    }
    function is_logged_in() {
        return $this->session->userdata('UID') != false;
    }
    public function getinfoby($code){
        $this->db->select('*');
        $this->db->where('company_code',$code);
        $query=$this->db->get($this->tb_info);
        return $query->row();
    }
    public function getdataby($code){

        $this->db->select('*');
        $this->db->from('card_info_tb');
        $this->db->join('card_template_tb','card_info_tb.company_code=card_template_tb.company_code');
        $this->db->where('card_info_tb.company_code',$code);
        $query = $this->db->get();
        return $query->row();
    }
    // function add(&$customer_data, $id = false) 
    // {
    //     if (!$id) {
    //         if ($this->db->insert($this->tb_customer, $customer_data)) {
    //             $data['channel_id'] = $this->db->insert_id();
    //             return true;
    //         }
    //     } 
    //     else 
    //     {
    //         $this->db->where('cust_id',$id);
    //         return $this->db->update($this->tb_customer, $customer_data);
    //     }
    //     return $false;
    // }
    // function getlist(){
    // 	$query=$this->db->get($this->tb_customer);
    //     return $query->result();
    // }
    // public function getteamby($id){
    //     $this->db->select('*');
    //     $this->db->where('company_code', $id);
    //     $query=$this->db->get($this->tb_team);
    //     return $query->result();
    // }
    // public function getinfo($id){
    //     $this->db->select('*');
    //     $this->db->where('company_code',$id);
    //     $query=$this->db->get($this->tb_customer);
    //     return $query->row();
    // }
    // public function geturlname($id){

    //     $this->db->select('company_url');
    //     $this->db->where('customerUID',$id);
    //     $query=$this->db->get($this->tb_customer);
    //     return $query->row();
    // }
    // public function getdataby($name){
    //     $this->db->select('*');
    //     $this->db->where('company_url',$name);
    //     $query=$this->db->get($this->tb_customer);
    //     return $query->row();
    // }
    
}