<?php
class Cucce extends Products{

    private $size;

    function __construct($_size,$_name,$_prezzo,$_description)
    {
        parent::__construct($_name,$_prezzo,$_description);
        $this->setSize($_size);
    }

    /**
     * Get the value of size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     */
    public function setSize($size): self
    {
        $this->size = $size;

        return $this;
    }
}
?>