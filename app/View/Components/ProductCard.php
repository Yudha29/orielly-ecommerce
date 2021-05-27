<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    public $id;
    public $name;
    public $merk;
    public $numOfSold;
    public $discount;
    public $price;
    public $thumbnail;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $id, string $name, string $merk, int $numOfSold, float $discount, float $price, $thumbnail)
    {
        $this->id = $id;
        $this->name = $name;
        $this->merk = $merk;
        $this->numOfSold = $numOfSold;
        $this->discount = $discount;
        $this->price = $price;
        $this->thumbnail = $thumbnail;
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
