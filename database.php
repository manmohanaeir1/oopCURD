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
                $this->conn = true;
                if($this->mysqli->connect_errno) {
                   array_push($this->result,$this->mysqli->connect_errno);
                   return false;
                }
            }else {
                return true;
            }

        }
        // for inserting data
        public function insert($table ,$parames = array()){
                 if($this->tableExist($table)){
                    $table_colms = implode(', ', array_keys($parames));
                    $table_value = implode("', '", $parames);

                    $sql = "INSERT INTO  $table ($table_colms) VALUES ('$table_value')";

                    if($this->mysqli->query(($sql))){
                        array_push($this->result, $this->mysqli->insert_id);
                        return true;
                    }else{
                        array_push($this->result, $this->mysqli->error);
                        return false;
                    }
                 }else{
                    return false;
                 }
        }

        // update row data

        public function update(){

        }

        //delete data from Db
        public function delete(){

        }

        private function tableExist($table){
            $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
            $tblInDb = $this->mysqli->query($sql);
            if($tblInDb){
                if($tblInDb->num_rows ==1)
                {
                    return true;
                }else{
                    array_push($this->result, $table. "Does not exist in this database. ");
                    return false;
                }
            }
        }

        public function getResult(){
            $val = $this->result;
            $this->result = array();
            return $val;
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