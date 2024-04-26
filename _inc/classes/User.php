<?php

    class User extends Database{
        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }

        public function login($useremail, $password){
            try{
                $data = array(
                    'user_email'=>$useremail,
                    'user_password'=>$password,
                );
                $sql = "SELECT * FROM user WHERE email = :user_email AND password = :user_password";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
                $n_rows = $query_run->rowCount();
                if($n_rows == 1) {
                    // login je uspesny
                    $_SESSION['logged_in'] = true;
                    $_SESSION['is_admin'] =  $query_run->fetch()->role;
                    return true;
                }else {
                    return false;
                }
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }

?>