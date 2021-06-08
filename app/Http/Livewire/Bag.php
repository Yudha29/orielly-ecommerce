<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Bag extends Component
{
    public $products, $grandTotal = 0, $total = 0, $totalDiscount = 0;

    public function render()
    {
        if (Auth::check()) {
            $this->products = \App\Models\Bag::where('user_id', Auth::user()->id)->get();
            $this->products->each(function($p) {
                $this->total = $this->total + $p->product->price;
                $this->totalDiscount = $this->totalDiscount + ($p->product->price * $p->product->discount);
            });
            $this->grandTotal = $this->total - $this->totalDiscount;
        }
        return view('livewire.bag');
    }

    public function increment($id)
    {
        $product = \App\Models\Bag::find($id);

        if (isset($product)) {
            $product->quantity = $product->quantity + 1;
            $product->save();
        }
    }

    public function decrement($id)
    {
        $product = \App\Models\Bag::find($id);

        if (isset($product)) {
            if ($product->quantity == 1) {
                $product->delete();
            } else {
                $product->quantity = $product->quantity - 1;
                $product->save();
            }
        }
    }
}
