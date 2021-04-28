<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlpineJsEventListener extends Component
{
    public function emitEvent()
    {
        $this->emit('somethingUpdated');
    }

    public function render()
    {
        return view('livewire.alpine-js-event-listener');
    }
}
