<?php
    include 'DBconnexion.class.php';
    class customer  
    {
        private $pdo;

        public function __construct()
        {
           $dbconn = new DBConnection;
           $this->pdo = $dbconn->connectDB();
        }
         public function register($name, $email, $pwd,$phone,$address)
         {
             try {
                 $sql = "INSERT INTO customer(name,email,pwd,phone,address)
                        VALUES (:name,:email,:pwd,:phone,:address)";
                $query=$this->pdo->prepare($sql);
                $query->bindParam(':name',$name);
                $query->bindParam(':email',$email);
                $query->bindParam(':pwd',$pwd);
                $query->bindParam(':phone',$phone);
                $query->bindParam(':address',$address);
                $query->execute();
                return $query;
             } catch (PDOExeption $ex) {
                echo $ex->getMessage();
             }
         }
        public function login($email, $pwd)
        {
            try {
                $sql = "SELECT * FROM customer WHERE email= :email";
                $query = $this->pdo->prepare($sql);
                $query->bindparam(":email", $email);
                $query->execute();
                $customer = $query->fetch();
                if (password_verify($pwd, $customer['pwd'])) {
                    return $customer;
                } else {
                    return false;
                }
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
    }