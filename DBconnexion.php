<?php
   class database
   {
      private $host= 'localhost';
      private $dbname= 'foodorder';
      private $user = 'root';
      private $pwd = '';
      public $connexion=null;

      public function connectdb()
      {
         try { 
            $this->connexion = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->user,$this->pwd);
         } catch (Exception $e) { 
            echo $e->getMessage();
         }
         return $this->connexion;
      }
   }
?>