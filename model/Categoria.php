<?php

class Categoria{
    private $id;
    private $categoriaC;
    private $numerazione;

    public function __construct($id,$categoriaC,$numerazione)
    {
        $this->id= $id;
        $this->categoriaC= $categoriaC;
        $this->numerazione= $numerazione;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of categoriaC
     */ 
    public function getCategoriaC()
    {
        return $this->categoriaC;
    }

    /**
     * Set the value of categoriaC
     *
     * @return  self
     */ 
    public function setCategoriaC($categoriaC)
    {
        $this->categoriaC = $categoriaC;

        return $this;
    }

    /**
     * Get the value of numerazione
     */
    public function getNumerazione()
    {
        return $this->numerazione;
    }

    /**
     * Set the value of numerazione
     */
    public function setNumerazione($numerazione): self
    {
        $this->numerazione = $numerazione;

        return $this;
    }
}

?>