<?php 
    class Emp extends CI_Model
    {
        protected $_name = "emp";
        public function __construct(){

        }
        public function getAll(){
            $query = $this->db->get($this->_name);
            return $query->result();
        }
        public function add($data)
        {
            $this->db->insert($this->_name,$data);
        }
    }
?>