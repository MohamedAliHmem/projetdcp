<?php
include_once('modele.php');
class Tache extends Modele {
    private $rate,$tache;
    function __construct(){
        parent ::__construct();
    }

    function insert($rate,$tache){
        $query="insert into tache(rate,tache) values(? ,?)";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($rate,$tache));
    }

    function liste(){
        $query = "select * from tache";
        $res=$this->pdo->query($query);
        return $res;
    }
    function modifier($rate,$tache,$id)
    {
        $sql = "UPDATE tache SET  rate=?, tache=? WHERE id=?";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute(array($rate,$tache,$id));
    }

    function delete($id){
        $sql = "delete from tache where id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($id));
    }
}

?>