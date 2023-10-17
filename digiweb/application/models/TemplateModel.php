<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TemplateModel extends CI_Model {

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
        $this->tb_info = 'card_tb';
        $this->tb_team = 'card_team_tb';
        $this->tb_social = 'card_social_link_tb';
        $this->tb_service = 'card_service_tb';
        $this->tb_product = 'card_product_tb';
        $this->tb_payment = 'card_payment_tb';
        $this->tb_order = 'card_order_tb';
        $this->tb_gallery = 'card_gallery_tb';
        $this->tb_category = 'card_category';
        $this->tb_catalogue = 'card_catalogue_tb';
        $this->tb_alltemplate = 'template_tb';
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
        $this->db->where('company_code',$code);
        $query=$this->db->get($this->tb_info);
        return $query->row();
    }
    public function gettempdataby($var){
        $this->db->select('*');
        $this->db->where('temp_name',$var);
        $query=$this->db->get($this->tb_alltemplate);
        return $query->row();
    }
    
}