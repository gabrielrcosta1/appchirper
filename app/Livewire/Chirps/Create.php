<?php

namespace App\Livewire\Chirps;

use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{

    #[Validate('required|string|max:1000')]
    public string $message = '';
    public function render(): View
    {
        return view('livewire.chirps.create');
    }

    public function store(): void
    {
        $validated = $this->validate();
 
        auth()->user()->chirps()->create($validated);
 
        $this->message = '';
        $this->dispatch('chirp-created'); 
    } 
}
