<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Autocomplete extends Component
{
    public $event;
    public $model;
    public $column;
    public $perPage;
    public $page = 1;
    public $value;
    public $hasAll = false;

    public function mount(string $event, string $model, string $column, int $perPage = 2)
    {
        $this->event = $event;
        $this->model = $model;
        $this->column = $column;
        $this->perPage = $perPage;
    }

    public function search($value)
    {
        if ($value != $this->value) {
            $this->reset(['page', 'hasAll']);
        }

        $this->value = $value;
    }

    public function close()
    {
        $this->reset(['page', 'value', 'hasAll']);
    }

    public function selectedValue($value)
    {
        $this->dispatchBrowserEvent('event:' . $this->event, $value);

        $this->close();
    }

    public function more()
    {
        $this->page++;
    }

    public function render()
    {
        return view('livewire.autocomplete', [
            'results' => $this->fetchResults()
        ]);
    }

    protected function fetchResults()
    {
        $results = app($this->model)->when($this->value, function (Builder $query, $value) {
            return $query->where($this->column, 'like', "%{$value}%");
        }, function (Builder $query) {
            return $query->whereRaw('1 = 0');
        })
            ->groupBy($this->column)
            ->paginate($this->perPage * $this->page, $this->column);

        if (!$results->hasMorePages()) {
            $this->hasAll = true;
        }

        return $results;
    }
}
