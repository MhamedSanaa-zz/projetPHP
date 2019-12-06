<?php
    require 'DBconnexion.php';
    class customer  
    {
        private $connexion;

        public function __construct()
        {
           $DB = new database;
           $this->connnexion = $DB->connectdb();
        }
        public function readunique()
         {
             try {
                $req=$this->connexion->prepare('SELECT * FROM customer where Cid= :param_id');
                $req->bindParam(':param_id',$_GET['Cid']);
                $req->execute();
                return $req;
             } catch (Exeption $e) {
                 echo $e->getMessage();
             }
         }
         public function customerReg($name,$email,$pwd,$phone,$address)
         {
            $req=$this->connexion->prepare("INSERT INTO customer VALUES (null, :name , :email , :pwd , :phone, :address)");
            
            $req->bindParam(':name',$name);
            $req->bindParam(':address',$address);
            $req->bindParam(':email',$email);
            $req->bindParam(':phone',$phone);
            $req->bindParam(':pwd',$pwd);
            
            $req->execute();
         }
         public function updatestds()
         {
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $id=$_POST['id'];
            
            $req=$this->cnx->prepare('UPDATE students SET firstname=:firstname , lastname=:lastname , email=:email , phone=:phone WHERE id=:id');
            
            $req->bindParam(':firstname',$firstname);
            $req->bindParam(':lastname',$lastname);
            $req->bindParam(':email',$email);
            $req->bindParam(':phone',$phone);
            $req->bindParam(':id',$id);
            $req->execute();
            header('Location:index.php?alerte=edit');
         }
    }
?>