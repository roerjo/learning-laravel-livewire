<?php

namespace Tests\Feature\Http\Livewire;

use App\Http\Livewire\ContactForm;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * @test
     * @see ContactForm
     * @see resources/views/welcome.blade.php
     */
    function component_is_loaded_into_view()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeLivewire('contact-form');
    }

    /**
     * @test
     * @see ContactForm
     * @see resources/views/livewire/contact-form.blade.php
     */
    function contact_form_submits_successfully()
    {
        Livewire::test(ContactForm::class)
            ->set('name', 'Test Name')
            ->set('email', 'test@test.com')
            ->set('contact_message', 'Hello World')
            ->call('submitForm')
            ->assertSee('Sent message to Test Name at test@test.com!');
    }

    /**
     * @test
     * @see ContactForm
     * @see resources/views/livewire/contact-form.blade.php
     */
    function contact_form_validates_required_fields()
    {
        Livewire::test(ContactForm::class)
            ->call('submitForm')
            ->assertHasErrors([
                'name' => 'required',
                'email' => 'required',
                'contact_message' => 'required',
            ]);
    }

    /**
     * @test
     * @see ContactForm
     * @see resources/views/livewire/contact-form.blade.php
     */
    function contact_form_validates_email_format()
    {
        Livewire::test(ContactForm::class)
            ->set('name', 'Test Name')
            ->set('email', 'test$test.com')
            ->set('contact_message', 'Hello World')
            ->call('submitForm')
            ->assertHasErrors(['email' => 'email']);
    }
}
