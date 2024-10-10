<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    public function render()

    {

        return view('livewire.projects.index');

    }

        #[Computed()]

        public function projects()

        {

            return Project::query()->inRandomOrder()->get();

        }
}
