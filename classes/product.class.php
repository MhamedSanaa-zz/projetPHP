<?php
include 'DBconnexion.class.php';
class product
{
    private $pdo;
    public function __construct()
    {
        $dbconn = new DBConnection;
        $this->pdo = $dbconn->connectDB();
    }
  
    public function getdata()
    {
        $query='SELECT * FROM products ORDER BY pid ASC';
        $result=$this->pdo->prepare($query);
        $result->execute();
       return $product=$result->fetchAll(PDO::FETCH_OBJ);
    }
       
}
?>