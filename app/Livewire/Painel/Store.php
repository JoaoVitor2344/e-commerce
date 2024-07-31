<?php

namespace App\Livewire\Painel;

use Livewire\Component;

class Store extends Component
{
    public $stores = [];

    public $search_text;

    public function search()
    {
        $this->stores = \App\Models\Store::where('name', 'like', "%{$this->search_text}%")->get();
    }

    public function render()
    {
        return view('livewire.painel.stores.index');
    }
}
