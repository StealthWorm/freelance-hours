<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.projects.index');
    }

    #[Computed()] //introduzido no PHP 8.0, permitindo trazer caracteristicas e atribs para um método ou classe
    public function projects()
    {
        return Project::query()->inRandomOrder()->get();
    }
}