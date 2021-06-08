<?php

namespace App\Http\Livewire;

use App\Models\Bag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToBagCard extends Component
{
    public $quantity, $product;

    public function mount($product)
    {
        $this->quantity = 1;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.add-to-bag-card');
    }

    public function increment()
    {
        $this->quantity = $this->quantity + 1;
    }

    public function decrement()
    {
        if ($this->quantity > 1)
            $this->quantity = $this->quantity - 1;
    }

    public function addToBag()
    {
        $product = Bag::where('product_id', $this->product->id)
            ->where('user_id', Auth::user()->id)
            ->first();

        if (isset($product)) {
            $product->quantity = $product->quantity + $this->quantity;
            $product->save();
        } else {
            $bag = new Bag([
                'quantity' => $this->quantity,
                'product_id' => $this->product->id,
                'user_id' => Auth::user()->id
            ]);

            $bag->save();
        }

        $this->dispatchBrowserEvent('alert',
            ['type' => 'success',  'message' => 'Produk ditambahkan ke tas']);
    }
}
