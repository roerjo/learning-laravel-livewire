<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ContactForm extends Component
{
    public ?string $name = null;
    public ?string $email = null;
    public ?string $contact_message = null;
    public ?string $result_message = null;

    protected array $rules = [
        'name' => 'required|string',
        'email' => 'required|string|email',
        'contact_message' => 'required|string|min:5',
    ];

    protected array $validationAttributes = [
        'contact_message' => 'message',
    ];

    public function submitForm(): void
    {
        $this->validate();

        $this->result_message = <<<ResultMessage
            Sent message to {$this->name} at {$this->email}!
        ResultMessage;

        $this->reset(['name', 'email', 'contact_message']);
    }

    public function clearResultMessage(): void
    {
        $this->result_message = null;
    }

    public function render(): View
    {
        return view('livewire.contact-form');
    }
}
