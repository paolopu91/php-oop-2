<?php
require_once "categories/products.php";
class User{
    private $FullName;
    private $Email;
    private $registered;
    private $discount;

    function __construct($_fullname,$_email,$_registered)
    {
        $this->setFullName($_fullname);
        $this->setEmail($_email);
        $this->setRegistered($_registered);
    }


    /**
     * Get the value of FullName
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    /**
     * Set the value of FullName
     */
    public function setFullName($FullName): self
    {
        $this->FullName = $FullName;

        return $this;
    }

    /**
     * Get the value of Email
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     */
    public function setEmail($Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of registered
     */
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set the value of registered
     */
    public function setRegistered( $_registered )
    {
        if($_registered === true){
            $this->discount = 0.2;
        }else{
            $this->discount= 0;
            echo  "<h4>Registrati per ricevere lo sconto del 20%</h4>";
        }
    }

    /**
     * Get the value of discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     */
    public function setDiscount($discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}