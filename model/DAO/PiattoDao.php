<?php

require_once "model/Piatto.php";
require_once "model/Categoria.php";
require_once "model/DAO/CategoriaDao.php";
require_once "model/utils/Connectiondb.php";

class PiattoDao{

    public function getAllPiatto(){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "SELECT piatti.id, piatti.nome, piatti.prezzo, categorie.nome_categoria, piatti.locandina FROM `piatti` INNER JOIN `categorie` ON piatti.categoria_id= categorie.id_categoria";
        $result= $connection->query($query);
        $listaPiatti= array();
        while($riga= $result->fetch_array(MYSQLI_ASSOC)){
            $piatto= new Piatto($riga['id'], $riga['nome'], $riga['prezzo'], $riga['nome_categoria'], $riga['locandina']);
            $listaPiatti[]= $piatto;
        }
        return $listaPiatti;
        
    }

    public function insertPiatto(Piatto $piatto){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "INSERT INTO `piatti` (`id`, `nome`, `prezzo`, `categoria_id`, `locandina`) VALUES(0, ?, ?, ?, ?)";
        $stm= $connection->prepare($query);
        $stm->bind_param('siis', $piatto->getNome(), $piatto->getPrezzo(),$piatto->getCategoria(), $piatto->getLocandina());
        $stm->execute();
    }

    public function getPiattiByCategoria($categoriaNome) {
        $conn = new ConnectionDb();
        $connection = $conn->connect();
        $query = "SELECT piatti.id, piatti.nome, piatti.prezzo, piatti.locandina FROM `piatti`
                  INNER JOIN `categorie` ON piatti.categoria_id = categorie.id_categoria
                  WHERE categorie.nome_categoria = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $categoriaNome);
        $stmt->execute();
        $result = $stmt->get_result();
    
        $piatti = array();
    
        while ($riga = $result->fetch_array(MYSQLI_ASSOC)) {
            $piatto = new Piatto($riga['id'], $riga['nome'], $riga['prezzo'], $categoriaNome, $riga['locandina']);
            $piatti[] = $piatto;
        }
    
        return $piatti;
    }

    public function getAllCateOrdinata(){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "SELECT  piatti.id, piatti.nome, piatti.prezzo, categorie.nome_categoria, piatti.locandina FROM `piatti` INNER JOIN `categorie` ON piatti.categoria_id= categorie.id_categoria ORDER BY numerazione";
        $result= $connection->query($query);
        $listaPiatti= array();
        while($riga= $result->fetch_array(MYSQLI_ASSOC)){
           $piatto= new Piatto($riga['id'], $riga['nome'], $riga['prezzo'], $riga['nome_categoria'], $riga['locandina']);
           $listaPiatti[]= $piatto; 
        }
        return $listaPiatti;
    }

    public function deletePiatto($id){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "DELETE FROM piatti WHERE id= ?";
        $stm= $connection->prepare($query);
        $stm->bind_param('i', $id);
        if($stm->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getImgById($locandina){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "SELECT locandina FROM `piatti` WHERE id= ? LIMIT 1";
        $stm= $connection->prepare($query);
        $stm->bind_param('s', $locandina);
        $stm->execute();
        $result= $stm->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['locandina'];
        } else {
            // Restituisci un valore vuoto o una notifica di errore se nessun piatto con l'ID specifico è stato trovato.
            return null;
        }
    }

    public function updatePiatto($newNome, $newPrezzo, $newCategoria, $id){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "UPDATE `piatti` INNER JOIN `categorie` ON piatti.categoria_id= categorie.id_categoria SET piatti.nome= ?, piatti.prezzo= ?, piatti.categoria_id = ? WHERE piatti.id= ?";
        $stm= $connection->prepare($query);
        $stm->bind_param('sssi', $newNome, $newPrezzo, $newCategoria,$id);
        if($stm->execute()){
            return true;
        }else{ 
           echo "error ".$stm->error;
        }
    }

    public function getPiattiById($id) {
        $conn = new ConnectionDb();
        $connection = $conn->connect();
        $query = "SELECT piatti.id, piatti.nome, piatti.prezzo, piatti.categoria_id, piatti.locandina FROM `piatti`
                  INNER JOIN `categorie` ON piatti.categoria_id = categorie.id_categoria
                  WHERE piatti.id = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $riga = $result->fetch_assoc();
    
        if ($riga) {
            // Passiamo direttamente i valori al costruttore di Piatto
            $piatto = new Piatto($id, $riga['nome'], $riga['prezzo'], $riga['categoria_id'], $riga['locandina']);
    
            return $piatto;
        } else {
            // Restituisci qualcosa per indicare che l'ID non esiste
            return null;
        }

    }





}

    
    


?>