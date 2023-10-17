<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PanelModel extends CI_Model {

	protected $tb_customer;

    function __construct() {
        $this->tb_customer = 'customer_tb';
    }
    function is_logged_in() {
        return $this->session->userdata('leadUID') != false;
    }
    function add(&$customerData, $LUID = false) 
    {
        //if there is no data with this id, create new
        if (!$LUID) {
            if ($this->db->insert($this->tb_customer, $customerData)) {
                $data['cust_id'] = $this->db->insert_id();
                return true;
            }
        } 
        else 
        {
            $this->db->where('leadUID',$LUID);
            return $this->db->update($this->tb_customer, $customerData);
        }
        return $false;
    }
    function login($email, $password) {
        $query = $this->db->get_where($this->tb_customer, array('email' => $email, 'password' => md5($password)));
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $this->session->set_userdata('UID', $row->company_code);
            $this->session->set_userdata('email', $row->email);
            $this->session->set_userdata('firstname', $row->firstname);
            $this->session->set_userdata('lastname', $row->lastname);
            return true;
        }
        return false;
    }
}