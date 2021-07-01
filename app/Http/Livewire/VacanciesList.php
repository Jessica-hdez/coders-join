<?php

namespace App\Http\Livewire;

use App\Models\Vacancy;
use Livewire\Component;

class VacanciesList extends Component
{
    public function render()
    {
        return view('livewire.vacancies-list', [
            'vacancies' => Vacancy::latest()->with('user')->take(5)->get()
        ]);
    }
}