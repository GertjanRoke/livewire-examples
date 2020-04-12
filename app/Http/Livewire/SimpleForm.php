<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SimpleForm extends Component
{
    /**
     * With creating a single $form property we can easily add new data inside from the frontend like this:
     * @example <input wire:model="form.name">
     *
     * @var array
     */
    public $form = [];

    public function render()
    {
        return view('livewire.simple-form');
    }

    public function submit()
    {
        // Just replace this with the logic to store the data that is stored inside the public $form property.
        // But for this example it's easier to just flash it back to the frontend
        session()->flash('form-input', $this->form);
    }
}
