<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.pages.about')
            ->layout('layouts.master');
    }
}
