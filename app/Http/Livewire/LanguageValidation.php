<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LanguageValidation extends Component
{
    public $name = '';

    public function updated()
    {
        $this->validate([
            'name' => ['required', 'min:6'],
        ]);
    }

    public function render()
    {
        return view('livewire.language-validation');
    }
}
