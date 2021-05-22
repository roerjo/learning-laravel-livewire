<?php

namespace Tests\Feature\Http\Livewire;

use App\Http\Livewire\SearchDropdown;
use Livewire\Livewire;
use Tests\TestCase;

class SearchDropdownTest extends TestCase
{
    /**
     * @test
     * @see SearchDropdown
     * @see resources/views/welcome.blade.php
     */
    function component_is_loaded_into_view()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeLivewire('search-dropdown');
    }

    /**
     * @test
     * @see SearchDropdown
     * @see resources/views/livewire/search-dropdown.blade.php
     */
    function search_successfully_returns_results()
    {
        Livewire::test(SearchDropdown::class)
            ->assertDontSee('John Lennon')
            ->set('search', 'Imagine')
            ->assertSee('John Lennon');
    }

    /**
     * @test
     * @see SearchDropdown
     * @see resources/views/livewire/search-dropdown.blade.php
     */
    function search_handles_no_results()
    {
        Livewire::test(SearchDropdown::class)
            ->set('search', '111111111111111111')
            ->assertSee('No results found for');
    }
}
