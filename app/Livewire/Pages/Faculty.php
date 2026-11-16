<?php

namespace App\Livewire\Pages;

use App\Models\Faculty as ModelsFaculty;
use App\Models\Category_Faculty;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Faculties - ASHNO 2027')]
class Faculty extends Component
{
    public string $searchTerm = '';
    public string $selectedCategory = 'all';
    public bool $readyToLoad = false;

    public function loadFaculties(): void
    {
        $this->readyToLoad = true;
    }

    public function selectCategory(string $categoryId): void
    {
        $this->selectedCategory = $categoryId;
    }

    public function render()
    {
        $categories = Category_Faculty::query()
            ->orderBy('no_urut')
            ->orderBy('name')
            ->get();

        if (!$this->readyToLoad) {
            return view('livewire.pages.faculty', [
                'faculties' => collect(),
                'categories' => $categories,
                'readyToLoad' => $this->readyToLoad,
            ]);
        }

        $facultyQuery = ModelsFaculty::query()
            ->where('is_active', true)
            ->with(['categoryFaculty', 'schedules.sesi', 'scheduleSessions'])
            ->orderBy('no_urut')
            ->orderBy('name');

        if ($this->selectedCategory !== 'all') {
            $facultyQuery->where('id_category', $this->selectedCategory);
        }

        if (strlen($this->searchTerm) >= 3) {
            $facultyQuery->where('name', 'like', '%' . $this->searchTerm . '%');
        }

        return view('livewire.pages.faculty', [
            'faculties' => $facultyQuery->get(),
            'categories' => $categories,
            'readyToLoad' => $this->readyToLoad,
        ]);
    }
}
