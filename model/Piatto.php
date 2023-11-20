<?php

class Piatto{
    private $id;
    private $nome;
    private $prezzo;
    private $categoria;
    private $locandina;

    public function __construct($id, $nome, $prezzo, $categoria, $locandina)
    {
 $this->id= $id;
 $this->nome= $nome;
 $this->prezzo= $prezzo;
 $this->categoria= $categoria;
 $this->locandina= $locandina;
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
     * Get the value of prezzo
     */
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set the value of prezzo
     */
    public function setPrezzo($prezzo): self
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of locandina
     */
    public function getLocandina()
    {
        return $this->locandina;
    }

    /**
     * Set the value of locandina
     */
    public function setLocandina($locandina): self
    {
        $this->locandina = $locandina;

        return $this;
    }
}


?>