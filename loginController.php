<?php
session_start();
require_once "model/DAO/UtenteDao.php";


if(isset($_POST['action'])){
    $action= $_POST['action'];
    $utenteDao= new UtenteDao();

    switch($action){
        case 'login':
            $username= htmlspecialchars($_POST['username']);
            $password= htmlspecialchars($_POST['password']);
            
            
            $res= $utenteDao->checkLogin($username, $password);
            
            if($res){
                $_SESSION['login']= $res->getRuolo();
                $_SESSION['user'] = [
                    'id' => $res->getId(),
                    'username' => $res->getUsername(),
                    'nome'=>$res->getNome(),
                    'email'=>$res->getEmail(),
                    'phone'=>$res->getPhone(),
                    'role' => $res->getRuolo()
                    
                ];
                header("location:index.php");
            }else{
                header("location:login.php");
            }
            break;

            case 'logout':
                session_destroy();
                header("location:index.php");
                break;

        case 'registrazione':
            $nomeUtente= htmlspecialchars($_POST['nome']);
            $email= htmlspecialchars($_POST['email']);
            $phone= htmlspecialchars($_POST['phone']);
            $username= htmlspecialchars($_POST['username']);
            $password= htmlspecialchars($_POST['password']);
            $ruolo= $_POST['role'];
            $utente= new Utente(0, $nomeUtente, $email, $phone, $username, $password, $ruolo);

                $utenteDao->signUp( $utente);
           
                $_SESSION['login']= 'user';

                header("location:index.php");     
 
    }
             

    }

    




?>