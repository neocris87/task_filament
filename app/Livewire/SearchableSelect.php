<?php

namespace App\Livewire;

use Livewire\Component;

class SearchableSelect extends Component
{
    public $search = '';
    public $items = [];
    public $selectedItem = null;
    public $showDropdown = false;

    public function mount($items)
    {
        $this->items = $items;
    }

    public function updatedSearch()
    {
        $this->showDropdown = true;
    }

    public function selectItem($id, $name)
    {
        $this->selectedItem = ['id' => $id, 'name' => $name];
        $this->search = $name;
        $this->showDropdown = false;
    }

    public function render()
    {
        $filteredItems = collect($this->items)
            ->filter(function($item) {
                return str_contains(strtolower($item['name']), strtolower($this->search));
            });

        return view('livewire.searchable-select', [
            'filteredItems' => $filteredItems
        ]);
    }
}
