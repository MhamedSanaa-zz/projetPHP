<?php
    include 'DBconnexion.class.php';
    class employee  
    {
        private $pdo;
        public function __construct()
        {
           $dbconn = new DBConnection;
           $this->pdo = $dbconn->connectDB();
        }
         public function register($name,$phone,$email,$pwd)
         {
             try {
                 $sql = "INSERT INTO employee(name,phone,email,pwd)
                        VALUES (:name,:phone,:email,:pwd)";
                $query=$this->pdo->prepare($sql);
                $query->bindParam(':name',$name);
                $query->bindParam(':email',$email);
                $query->bindParam(':pwd',$pwd);
                $query->bindParam(':phone',$phone);
                $query->execute();
                return $query;
             } catch (PDOExeption $ex) {
                echo $ex->getMessage();
             }
         }
        public function login($email,$pwd)
        {
            try {
                $sql = "SELECT * FROM employee WHERE email= :email";
                $query = $this->pdo->prepare($sql);
                $query->bindparam(":email", $email);
                $query->execute();
                $employee = $query->fetch();
                if (password_verify($pwd, $employee['pwd'])) {
                    return $employee;
                } else {
                    return false;
                }
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
        public function edit($id,$name,$phone,$email,$pwd)
        {
            try {
                $sql = "UPDATE employee SET name=:name,phone=:phone,email=:email,pwd=:pwd  WHERE eid=:id";
                $query = $this->pdo->prepare($sql);
                $query->bindparam(":email", $email);
                $query->bindparam(":name", $name);
                $query->bindparam(":pwd", $pwd);
                $query->bindparam(":phone", $phone);
                $query->bindparam(":id", $id);
                $query->execute();
                return $query;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
    }