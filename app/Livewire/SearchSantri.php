<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchSantri extends Component
{
    public $searchQuery = '';

    public function updatedSearchQuery()
    {
        $this->emit('filterSantri', $this->searchQuery);
    }

    public function render()
    {
        return view('livewire.search-santri');
    }
}