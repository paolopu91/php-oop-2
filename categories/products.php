<!--
 Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. 
-->

<?php
class Products{

    public $Titolo;
    public $Prezzo;


    /**
     * Get the value of Titolo
     */
    public function getTitolo()
    {
        return $this->Titolo;
    }

    /**
     * Set the value of Titolo
     */
    public function setTitolo($Titolo): self
    {
        $this->Titolo = $Titolo;

        return $this;
    }

    /**
     * Get the value of Prezzo
     */
    public function getPrezzo()
    {
        return $this->Prezzo;
    }

    /**
     * Set the value of Prezzo
     */
    public function setPrezzo($Prezzo): self
    {
        $this->Prezzo = $Prezzo;

        return $this;
    }
}


?>