<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SantaModel extends CI_Model {

	protected $tb_customer;

    function __construct() {
        $this->tb_customer = 'customer_tb';
    }
    function is_logged_in() {
        return $this->session->userdata('leadUID') != false;
    }
    function login($mobileno) {
        $keyword = "SC"; 
        $this->db->group_start();
        $this->db->like('leadUID',$keyword);
        $this->db->group_end();
        
        $params['conditions'] = array(
            'mobile_no' => $mobileno
        );
        $query = $this->db->get_where($this->tb_customer, $params['conditions']);
        // $this->db->like('mobile_no', 'leadUID');
        // $query = $this->db->get_where($this->tb_customer, array('mobile_no' => $mobileno,'leadUID', 'SC%'));
        // $this->db->like('leadUID', 'SC%');
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $this->session->set_userdata('SCUID', $row->leadUID);
            $this->session->set_userdata('email', $row->email);
            $this->session->set_userdata('firstname', $row->firstname);
            $this->session->set_userdata('message', $row->about_us);
            return true;
        }
        return false;
    }
    public function getcustomer($mobileno){
        $this->db->where('mobile_no', $mobileno);
        $this->db->order_by('cust_id', 'desc');    
        $query=$this->db->get($this->tb_customer);
        return $query->result();
    }
    public function getcustomerlist(){
        $query=$this->db->get($this->tb_customer);
        return $query->result();
    }
}