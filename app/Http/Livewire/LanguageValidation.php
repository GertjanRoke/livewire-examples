<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LanguageValidation extends Component
{
    public $name = '';

    public function __construct($id)
    {
        parent::__construct($id);

        // You could move this to a "parent" component that you then always extend or make a trait.
        if ($locale = session()->get('locale')) {
            app()->setLocale($locale);
        }
    }

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
