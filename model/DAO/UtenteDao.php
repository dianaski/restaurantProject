<?php

require_once "model/Utente.php";
require_once "model/utils/Connectiondb.php";

class UtenteDao{

    public function checkLogin($utente, $pw){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "SELECT * FROM `utenti` WHERE username= ? AND password= ?";
        $stm= $connection->prepare($query);
        $stm->bind_param('ss', $utente, $pw);
        $stm->execute();
        $result= $stm->get_result();

        $listaUtenti= array();
        while($riga= $result->fetch_array(MYSQLI_ASSOC)){
            $utente= new Utente($riga['id'],$riga['nomeCliente'],$riga['email'],$riga['phone'], $riga['username'], $riga['password'], $riga['ruolo']);
            $listaUtenti[]= $utente;
        }

        if(count($listaUtenti)<1){
            return false;
        }elseif(count($listaUtenti)==1){
            return $listaUtenti[0];
        }else{
            return null;
        }
    }

    public function signUp(Utente $utente){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "INSERT INTO `utenti` VALUES(0, ?, ?, ?, ?, ?,?)";
        $stm= $connection->prepare($query);
        $nome = $utente->getNome();
        $email = $utente->getEmail();
        $phone = $utente->getPhone();
        $username = $utente->getUsername();
        $password = $utente->getPassword();
        $ruolo = $utente->getRuolo();
        $stm->bind_param('ssisss', $nome, $email, $phone, $username, $password, $ruolo);
        if(!$stm->execute()){
 echo "errore!";
        }
    }

    public function getAllUser(){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "SELECT * FROM `utenti`";
        $result= $connection->query($query);
        $listaUtenti= array();
        while($riga= $result->fetch_array(MYSQLI_ASSOC)){
            $utente= new Utente($riga['id'], $riga['nomeCliente'], $riga['email'], $riga['phone'], $riga['username'], $riga['password'], $riga['ruolo']);
            $listaUtenti[]= $utente;
        }
        return $listaUtenti;
    }

    public function getUtenteById($id){
        $conn= new ConnectionDb();
        $connection= $conn->connect();
        $query= "SELECT * FROM `utenti` WHERE id= ?";
        $stm= $connection->prepare($query);
        $stm->bind_param('i', $id);
        $stm->execute();

    // Ottieni il risultato della query
    $result = $stm->get_result();

    // Controlla se ci sono risultati
    if ($result->num_rows > 0) {
        $riga = $result->fetch_assoc();

        // Creazione dell'oggetto Utente
        $utente = new Utente($id, $riga['nomeCliente'], $riga['email'], $riga['phone'], $riga['username'], $riga['password'], $riga['ruolo']);

        // Chiudi il risultato e il prepared statement
        $result->close();
        $stm->close();

        return $utente;
    } else {
        // Chiudi il risultato e il prepared statement
        $result->close();
        $stm->close();

        return null;
    }
}
}

?>