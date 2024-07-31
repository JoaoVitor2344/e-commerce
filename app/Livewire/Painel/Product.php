<?php

namespace App\Livewire\Painel;

use Livewire\Component;

class Product extends Component
{
    public $products;

    public $search_text;

    public $store;

    public function search()
    {
        $this->products = \App\Models\Product::where('name', 'like', "%{$this->search_text}%")
            ->where('store_id', $this->store->id)
            ->get();
    }

    public function render()
    {
        return view('livewire.painel.products.index');
    }
}
