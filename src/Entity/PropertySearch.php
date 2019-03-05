<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch {

    /**
     * @var int|null
     */
    private $maxPrice;

    /**
     * @var int|null
     */
    private $minPrice;


    /**
     * @var int|null
     */
    private $maxSurface;

    /**
     * @var int|null
     * @Assert\Range(min=10, max=400)
     */
    private $minSurface;
    




    /**
     * Get the value of maxPrice
     *
     * @return  int|null
     */ 
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Set the value of maxPrice
     *
     * @param  int|null  $maxPrice
     *
     * @return  self
     */ 
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Get the value of minPrice
     *
     * @return  int|null
     */ 
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * Set the value of minPrice
     *
     * @param  int|null  $minPrice
     *
     * @return  self
     */ 
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;

        return $this;
    }



    /**
     * Get the value of maxSurface
     *
     * @return  int|null
     */ 
    public function getMaxSurface()
    {
        return $this->maxSurface;
    }

    /**
     * Set the value of maxSurface
     *
     * @param  int|null  $maxSurface
     *
     * @return  self
     */ 
    public function setMaxSurface($maxSurface)
    {
        $this->maxSurface = $maxSurface;

        return $this;
    }

    /**
     * Get the value of minSurface
     *
     * @return  int|null
     */ 
    public function getMinSurface()
    {
        return $this->minSurface;
    }

    /**
     * Set the value of minSurface
     *
     * @param  int|null  $minSurface
     *
     * @return  self
     */ 
    public function setMinSurface($minSurface)
    {
        $this->minSurface = $minSurface;

        return $this;
    }
}