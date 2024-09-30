<?php

namespace App\Livewire\Chirps;

use App\Models\Chirp;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{
    public Collection $chirps; 
    public function mount(): void
    {
        $this->getChirps(); 
    } 

    #[On('chirp-created')]
    public function getChirps(): void
    {
        $this->chirps = Chirp::with('user')
            ->latest()
            ->get();
    } 
    public function render()
    {
        return view('livewire.chirps.show');
    }
}
