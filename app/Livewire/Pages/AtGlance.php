<?php

namespace App\Livewire\Pages;

use App\Models\atGlance as ModelsAtGlance;
use App\Models\ScheduleSession;
use App\Models\Time;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Program at Glance - ASHNO 2027')]
class AtGlance extends Component
{
    public $atglances;

    public $lima;
    public $enam;
    public $tujuh;
    public $delapan;

    public $downloads;

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $this->atglances = ScheduleSession::with('schedules')->get();

        $this->lima = $this->atglances->where('date', '2027-08-05')->sortBy('no_urut');
        $this->enam = $this->atglances->where('date', '2027-08-06')->sortBy('no_urut');
        $this->tujuh = $this->atglances->where('date', '2027-08-07')->sortBy('no_urut');
        $this->delapan = $this->atglances->where('date', '2027-08-08')->sortBy('no_urut');

        $this->downloads = \App\Models\DownloadSchedule::all();
    }

    private function scheduleDays(): array
    {
        $days = [
            ['date' => '2027-08-05', 'label' => '5 August', 'sessions' => $this->lima],
            ['date' => '2027-08-06', 'label' => '6 August', 'sessions' => $this->enam],
            ['date' => '2027-08-07', 'label' => '7 August', 'sessions' => $this->tujuh],
            ['date' => '2027-08-08', 'label' => '8 August', 'sessions' => $this->delapan],
        ];

        return array_map(function ($day) {
            $rooms = $day['sessions']
                ->map(fn($session) => filled($session->room) ? $session->room : 'Unassigned')
                ->unique()
                ->sort(fn($left, $right) => strnatcasecmp($left, $right))
                ->values();

            $timeSlots = $day['sessions']->groupBy('time')->map(function ($sessions, $time) use ($rooms) {
                return [
                    'time' => $time,
                    'rooms' => $rooms->map(fn($room) => [
                        'name' => $room,
                        'sessions' => $sessions
                            ->filter(fn($session) => (filled($session->room) ? $session->room : 'Unassigned') === $room)
                            ->values(),
                    ]),
                ];
            })->values();

            return [...$day, 'rooms' => $rooms, 'timeSlots' => $timeSlots];
        }, $days);
    }

    public function render()
    {
        return view('livewire.pages.at-glance', [
            'days' => $this->scheduleDays(),
        ]);
    }
}
