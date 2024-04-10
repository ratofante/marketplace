<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    /**
     * Class
     * 
     * default --> brand Product Card
     * "card-brand" --> for cards that are displayed 
     * in the /brand view.
     * 
     */
    public $class;

    /* logo image url */
    public $logo;
    /* Brand name for card header */
    public $brand;
    /* Tagname: 'New in', 'out of stock' */
    public $tagname;
    /**
     * @array
     * Product url images
     */
    public $productImages;
    /* Target (mujer, niño, hombre..) */
    public $target;
    /* Category (botas, camperas, remera..) */
    public $category;
    /* Nombre producto */
    public $name;
    /* Precio anterior */
    public $oldPrice;
    /* Precio actual */
    public $price;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $class = '', 
        $logo = '', 
        $brand = '',
        $tagname = '', 
        $productImages, 
        $target = '', 
        $category, 
        $name, 
        $oldPrice = '', 
        $price)
    {
        $this->class = $class;
        $this->logo = $logo;
        $this->brand = $brand;
        $this->tagname = $tagname;
        $this->productImages = $productImages;
        $this->target = $target;
        $this->category = $category;
        $this->name = $name;
        $this->oldPrice = $oldPrice;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-card');
    }
}
