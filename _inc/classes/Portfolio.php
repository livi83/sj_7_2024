<?php

    class Portfolio extends Database{
        private $db;

        public function __construct(){
            $this->db = $this->db_connection();
        }

        public function select(){
            try{

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }

?>