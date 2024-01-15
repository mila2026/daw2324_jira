<?php 
    class Delegacio extends CI_Model
    {
        protected $_name = "delegacio";
        public function __construct(){

        }
        public function getAll(){
            $query = $this->db->get($this->_name);
            return $query->result();
        }
        public function getId($id){
            $this->db->where('id', $id);
            $query = $this->db->get($this->_name);
            return $query->result();
        }

    }
?>