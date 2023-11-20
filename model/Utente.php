<?php

class Utente{
    private $id;
    private $nome;
    private $email;
    private $phone;
    private $username; 
    private $password;
    private $ruolo;

    public function __construct($id, $nome, $email, $phone, $username, $password, $ruolo)
    {
        $this->id= $id;
        $this->nome= $nome;
        $this->email= $email;
        $this->phone= $phone;
        $this->username= $username;
        $this->password= $password;
        $this->ruolo= $ruolo;

    }
    

    public function getId()
    {
        return $this->id;
    }

 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

   
    public function getUsername()
    {
        return $this->username;
    }

  
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

  
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getRuolo()
    {
        return $this->ruolo;
    }

    public function setRuolo($ruolo)
    {
        $this->ruolo = $ruolo;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }
}


?>