<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Opportunities extends Component
{
    public function render()
    {
        return view('livewire.pages.opportunities')
            ->layout('layouts.master');
    }
}
