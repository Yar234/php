<?php

class Cart
{
  private array $products;

  public function __construct(array $products)
  {
    $this->products = $products;
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
   *
   * @return  self
   */
  public function setProducts($products)
  {
    $this->products = $products;

    return $this;
  }

  public function addProduct(Product $product)
  {
    $this->products[] = $product;
  }

  public function removeProduct(Product $product)
  {
    $index = array_search($product, $this->products);
    if ($index !== false) {
      array_splice($this->products, $index, 1);
    }
  }

  public function getTotalPrice(): float
  {
    $totalPrice = 0;
    foreach ($this->products as $product) {
      $totalPrice += $product->getPrice();
    }
    return $totalPrice;
  }
}
