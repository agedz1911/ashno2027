<?php

namespace App\Livewire\Pages;

use App\Models\GuidelineAbstract;
use Livewire\Component;

class ArtCompetition extends Component
{
    public function render()
    {
        $arts = GuidelineAbstract::where('category', 'Head & Neck Art')->orderBy('no_urut', 'asc')->get();
        return view(
            'livewire.pages.art-competition',
            [
                'arts' => $arts
            ]
        );
    }
}
