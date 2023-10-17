<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductModel extends CI_Model {

	protected $tb_product;

    function __construct() {
        $this->tb_product = 'product_tb';
    }
    public function getdataby($id){
        $this->db->where('product_id', $id);
        $this->db->order_by('product_id', 'desc');    
        $query=$this->db->get($this->tb_product);
        return $query->result();
    }
}