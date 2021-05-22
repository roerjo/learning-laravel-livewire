<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public ?string $search = null;
    public array $search_results = [];

    public function updatedSearch(): void
    {
        $response = Http::get('https://itunes.apple.com/search', [
            'term' => $this->search,
            'media' => 'music',
            'limit' => 5,
        ]);

        $this->search_results = $response->json('results');
    }

    public function render(): View
    {
        return view('livewire.search-dropdown');
    }
}
