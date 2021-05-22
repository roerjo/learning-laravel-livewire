<?php

namespace Tests\Feature\Http\Livewire;

use App\Http\Livewire\Counter;
use Livewire\Livewire;
use Tests\TestCase;

class CounterTest extends TestCase
{
    /**
     * @test
     * @see Counter
     * @see resources/views/welcome.blade.php
     */
    function component_is_loaded_into_view()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeLivewire('counter');
    }

    /**
     * @test
     * @see Counter
     * @see resources/views/livewire/counter.blade.php
     */
    function counter_increments_successfully()
    {
        Livewire::test(Counter::class)
            ->call('increment')
            ->assertViewHas('count', 1);
    }

    /**
     * @test
     * @see Counter
     * @see resources/views/livewire/counter.blade.php
     */
    function counter_decrements_successfully()
    {
        Livewire::test(Counter::class)
            ->call('decrement')
            ->assertViewHas('count', -1);
    }
}
