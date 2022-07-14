<?php


class Cart{
    private $products=[];

    public function addProduct($product){
        $this->products[] = $product;
    }
    /**
     * Get the value of products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     */
    public function setProducts($products): self
    {
        $this->products = $products;

        return $this;
    }
}