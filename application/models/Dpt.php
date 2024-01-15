<?php 
    class Dpt extends CI_Model
    {
        protected $_name = "dpt";
        public function __construct(){

        }
        public function getAll(){
            $query = $this->db->get($this->_name);
            return $query->result();
        }

    }
?>