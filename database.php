<?php


    class database{

        private $db_host = "localhost";
        private $db_user = "root";
        private $db_pass = "";
        private $db_name = "oopcrud";
        private $mysqli = "";
        private $result = array(); // for error
        private $conn = false;

        public function __construct(){
            if(!$this->conn) {
                $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
                if($this->mysqli->connect_errno) {
                   array_push($this->result,$this->mysqli->connect_errno);
                   return false;
                }
            }else {
                return true;
            }

        }
        // for inserting data
        public function insert(){

        }

        // update row data

        public function update(){

        }

        //delete data from Db
        public function delete(){

        }

        // for close database connection
        public function __destruct()
        {   
            if($this->conn){
                if($this->mysqli->close()){
                    $this->conn = false;
                    return true;
                }
            }else{
                return false;
            }
            
        }
    }
?>