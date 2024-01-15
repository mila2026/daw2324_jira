<?php 
    class Oficina extends CI_Model
    {
        protected $_name = "oficina";
        public function __construct(){

        }
        public function getAll(){
            $query = $this->db->get($this->_name);
            return $query->result();
        }

        public function getWhere($delegacio){
            
            $this->db->where('delegacio', $delegacio);
            $query = $this->db->get($this->_name);
                
            return $query->result();
        }


        public function add($data)
        {
            $this->db->insert($this->_name,$data);
        }
    }
?>