<?php
require_once "model/Categoria.php";
require_once "model/utils/Connectiondb.php";

class CategoriaDao{

    public function getNomeCategorie(){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "SELECT * FROM `categorie`";
        $result= $connection->query($query);
        $listaCategorie= array();
        while($riga= $result->fetch_array(MYSQLI_ASSOC)){
            $categoria= new Categoria($riga['id_categoria'], $riga['nome_categoria'], $riga['numerazione']);
            $listaCategorie[]= $categoria;
        }
        return $listaCategorie;
    }

    public function insertCategoria(Categoria $categoria){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $res= self::getByCategoriaStrict($categoria);
        if(!$res){
            $query= "INSERT INTO `categorie` VALUES(0, ?, ?)";
            $stm= $connection->prepare($query);
            $stm->bind_param('si', $categoria->getCategoriaC(), $categoria->getNumerazione());
            $stm->execute();
        }
    }

    public function getUniqueCategorie($id, $cat, $num) {
        $conn = new ConnectionDb();
        $connection = $conn->connect();
        $res= self:: getByCategoriaStrict($cat);
        if(!$res){
            $query = "SELECT DISTINCT nome_categoria FROM `categorie`";
    
            $result = $connection->query($query);
        
            $categorie = array();
        
            while ($riga = $result->fetch_array(MYSQLI_ASSOC)) {
                $categoria = new Categoria(null, $riga['nome_categoria'], null);
                $categorie[] = $categoria;
            }
        
            return $categorie;
        }
        }

    public function getByCategoriaStrict(Categoria $cat){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "SELECT * FROM `categorie` WHERE nome_categoria= ?";
        $stm= $connection->prepare($query);
        $stm->bind_param('s', $cat->getCategoriaC());
        $stm->execute();
        $result= $stm->get_result();

        $listaCategorie= array();
        while($riga= $result->fetch_array(MYSQLI_ASSOC)){
            $categoria= new Categoria($riga['id_categoria'], $riga['nome_categoria'], $riga['numerazione']);
            $listaCategorie[]= $categoria;         
        }

        if(count($listaCategorie)<1){
            return false;
        }elseif(count($listaCategorie)==1){
            return $listaCategorie[0];
        }else{
            return null;
        }
    }

    public function orderCategoria(){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "SELECT * FROM `categorie` ORDER BY numerazione";
        $result= $connection->query($query);
        $listaCategorie= array();
        while($riga= $result->fetch_array(MYSQLI_ASSOC)){
            $categoria= new Categoria($riga['id_categoria'], $riga['nome_categoria'], $riga['numerazione']);
            $listaCategorie[]= $categoria;
        }
        return $listaCategorie;
    }

    public function deleteCategoria($id){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "DELETE FROM `categorie` WHERE id_categoria= ?";
        $stm= $connection->prepare($query);
        $stm->bind_param('i', $id);
        $stm->execute();
    }


}


?>