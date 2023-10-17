<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManagerModel extends CI_Model {

	protected $tb_user;

    function __construct() {
        $this->tb_user = 'user_tb';
    }
    function is_logged_in() {
        return $this->session->userdata('UID') != false;
    }
    function login($username, $password) {
        $query = $this->db->get_where($this->tb_user, array('username' => $username, 'password' =>$password));
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $this->session->set_userdata('UID', $row->userUID);
            $this->session->set_userdata('email', $row->email);
            $this->session->set_userdata('firstname', $row->firstname);
            $this->session->set_userdata('lastname', $row->lastname);
            return true;
        }
        return false;
    }
}