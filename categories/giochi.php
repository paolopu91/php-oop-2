<?php
require_once "categories/products.php";
class Giochi extends Products{

    public $Description;
    public $Typology;

    function __construct($_name,$_prezzo,$_description, $_typology)
    {
        parent::__construct($_name,$_prezzo);
        
        $this->setDescription($_description);
        $this->setTypology($_typology);
    }
    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of Typology
     */
    public function getTypology()
    {
        return $this->Typology;
    }

    /**
     * Set the value of Typology
     */
    public function setTypology($Typology): self
    {
        $this->Typology = $Typology;

        return $this;
    }
}
?>