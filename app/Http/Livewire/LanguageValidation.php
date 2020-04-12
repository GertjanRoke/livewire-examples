<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LanguageValidation extends Component
{
    public $name = '';

    public function __construct($id)
    {
        parent::__construct($id);

        /**
         * Here we are looking at the session to see if the "locale" key has been set (This is set in the SetLocale Middleware).
         * We need to do this because the endpoint of Livewire only contains the component name and we don't want to
         * pass the locale to every single componnent we create.
         *
         * @note: You could move this to a "parent" component that you then always extend or make a trait.
         */
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
