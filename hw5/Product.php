<?php

class Product
{
  private string $title;
  private float $price;
  private array $components;

  public function __construct(string $title, float $price, array $components)
  {
    $this->title = $title;
    $this->price = $price;
    $this->components = $components;
  }

  /**
   * Get the value of title
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Set the value of title
   *
   * @return  self
   */
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Get the value of price
   */
  public function getPrice(): float
  {
    if (empty($this->components)) {
      return $this->price;
    } else {
      $totalPrice = $this->price;
      foreach ($this->components as $component) {
        $totalPrice += $component->getPrice();
      }
      return $totalPrice;
    }
  }

  /**
   * Set the value of price
   *
   * @return  self
   */
  public function setPrice($price)
  {
    $this->price = $price;

    return $this;
  }

  /**
   * Get the value of components
   */
  public function getComponents()
  {
    return $this->components;
  }

  /**
   * Set the value of components
   *
   * @return  self
   */
  public function setComponents($components)
  {
    $this->components = $components;

    return $this;
  }
}
