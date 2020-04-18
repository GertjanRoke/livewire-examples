<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlpineJsEventListener extends Component
{
    public function render()
    {
        return view('livewire.alpine-js-event-listener');
    }

    public function updatingSomething()
    {
        $this->emit('somethingUpdated');
    }
}
