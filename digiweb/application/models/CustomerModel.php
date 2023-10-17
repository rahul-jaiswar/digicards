<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CustomerModel extends CI_Model {

	protected $tb_customer;
	protected $tb_team;

    function __construct() {
        $this->tb_customer = 'customer_tb';
        $this->tb_team = 'card_team_tb';
    }
    function is_logged_in() {
        return $this->session->userdata('UID') != false;
    }
    function add(&$customer_data, $id = false) 
    {
        if (!$id) {
            if ($this->db->insert($this->tb_customer, $customer_data)) {
                $data['channel_id'] = $this->db->insert_id();
                return true;
            }
        } 
        else 
        {
            $this->db->where('cust_id',$id);
            return $this->db->update($this->tb_customer, $customer_data);
        }
        return $false;
    }
    function getlist(){
    	$query=$this->db->get($this->tb_customer);
        return $query->result();
    }
    public function getteamby($id){
        $this->db->select('*');
        $this->db->where('company_code', $id);
        $query=$this->db->get($this->tb_team);
        return $query->result();
    }
    public function getinfo($id){
        $this->db->select('*');
        $this->db->where('company_code',$id);
        $query=$this->db->get($this->tb_customer);
        return $query->row();
    }
    public function geturlname($id){

        $this->db->select('company_url');
        $this->db->where('customerUID',$id);
        $query=$this->db->get($this->tb_customer);
        return $query->row();
    }
    public function getdataby($name){
        $this->db->select('*');
        $this->db->where('company_url',$name);
        $query=$this->db->get($this->tb_customer);
        return $query->row();
    }
    public function getinfoby($code){
        $this->db->select('*');
        $this->db->where('company_code',$code);
        $query=$this->db->get($this->tb_customer);
        return $query->row();
    }
}