<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user_tb';
    protected $returnType     = 'array';
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // protected $ignoreDeletedUserQuery = "deleted_at IS NULL";

    public function __construct(){
        parent::__construct();
        $db = \Config\Database::connect();
        $this->role = $db->table('roles_tb');
    }
    // public function setLimit($limit){
    //     if( !is_bool($limit) ){
    //         $this->db->limit($limit);
    //     }
    // }
    // public function fetchUsersWithEmail($email){
    //     return $this->db
    //     ->where("email", $email)
    //     ->get( $this->table )
    //     ->row_array();
    // }
    // public function fetchUsersWithId($userId){
    //     return $this->db
    //     ->where("id", $userId)
    //     ->get( $this->table )
    //     ->row_array();
    // }
    // public function fetchMasterUserId():string{
    //     return $this->db
    //     ->select( "id" )
    //     ->where( $this->ignoreDeletedUserQuery )
    //     ->order_by(
    //         $this->defaultOrderColumn,
    //         $this->defaultOrderSort
    //     )
    //     ->get( $this->table )
    //     ->row_array()["id"];
    // }
    // public function fetchUsers($limit) :array {
    //     // limitが数字の時はfetch制限をする
    //     $this->setLimit($limit);

    //     $fetchColumns = implode(", ", $this->defaultFetchColumns);
    //     return $this->db
    //     ->select( $fetchColumns )
    //     ->where( $this->ignoreDeletedUserQuery )
    //     ->order_by(
    //         $this->defaultOrderColumn,
    //         $this->defaultOrderSort
    //     )
    //     ->get( $this->table )
    //     ->result_array();
    // }
    // public function fetchAllUsers($limit) :array {
    //     $this->setLimit($limit);
    //     return $this->db
    //     ->order_by(
    //         $this->defaultOrderColumn,
    //         $this->defaultOrderSort
    //     )
    //     ->get( $this->table )
    //     ->result_array();
    // }
    public function getallrole(){
        return $this->role->get()->getResult();
    }
    public function insertrole($role){
        return $this->role->insert($role);
    }
    // public function insertrole($role){
    //     $user["created_at"] = time();
    //     $this->deb->insert($this->table, $user);
    // }
    // public function update($id,array $user){
    //     $this->db->where($this->idColumn, $id)
    //     ->update($this->table, $user);
    // }
    // public function delete($id){
    //     $this->db->where($this->idColumn, $id)
    //     ->delete( $this->table );
    // }
}