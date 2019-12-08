<?php
include 'DBconnexion.class.php';
class cart
{
    private $pdo;

    public function __construct()
    {
        $dbconn = new DBConnection;
        $this->pdo = $dbconn->connectDB();
    }
  
    public function createCart($cid,$pid,$qty,$status)
    {
        $query="INSERT INTO cart (cid,pid,qty,status) VALUES (:cid,:pid,:qty,:status)";
        $query = $this->pdo->prepare($sql);
        $query->bindparam(":cid", $cid);
        $query->bindparam(":pid", $pid;
        $query->bindparam(":qty", $qty);
        $query->bindparam(":status", $status);
        $query->execute();
        return $query;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
      
       

}
?>