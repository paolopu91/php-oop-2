<?php

class User{
    private $FullName;
    private $Email;
    private $discount;
    private $CreditCard;

    

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

    /**
     * Get the value of CreditCard
     */
    public function getCreditCard()
    {
        return $this->CreditCard;
    }

    /**
     * Set the value of CreditCard
     */
    public function setCreditCard($CreditCard): self
    {
        $this->CreditCard = $CreditCard;

        return $this;
    }
}