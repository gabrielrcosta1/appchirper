<?php

namespace App\Livewire\Chirps;

use App\Models\Chirp;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{public Collection $chirps;
 
    public ?Chirp $editing = null; 
 
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
    #[On('chirp-edit-canceled')]
    #[On('chirp-updated')] 
    public function disableEditing(): void
    {
        $this->editing = null;
 
        $this->getChirps();
    } 
    public function edit(Chirp $chirp): void
    {
        $this->editing = $chirp;
 
        $this->getChirps();
    }
}
