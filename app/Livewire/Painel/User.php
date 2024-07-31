<?php

namespace App\Livewire\Painel;

use Livewire\Component;

class User extends Component
{
    public $users = [];
    public $search_text;

    public function search()
    {
        if (empty($this->search_text)) {
            $this->users = \App\Models\User::all();
        } else {
            $this->users = \App\Models\User::where('name', 'like', '%' . $this->search_text . '%')
                ->orWhere('email', 'like', '%' . $this->search_text . '%')
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.painel.users.index');
    }
}
