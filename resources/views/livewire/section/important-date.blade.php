<div class="flex justify-center items-center w-full">

    <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
        @foreach($importantDates as $index => $date)
        <li>
            @if($index > 0)
            <hr />
            @endif
            <div class="timeline-middle">
                <i class="fa fa-calendar-check-o text-sky-500 text-lg"></i>
            </div>
            @if($index % 2 === 0)
            <div class="timeline-start mb-10 md:text-end">
                <time class="font-mono italic">{{ $date->title }}</time>
                <div class="text-lg font-black">
                    @if ($date->date_end && !$date->date)
                    {{
                    \Carbon\Carbon::parse($date->date_end)->format('F jS, Y')
                    }}
                    @elseif ($date->date_end)
                    {{
                    \Carbon\Carbon::parse($date->date)->format('F, jS') . ' - ' .
                    \Carbon\Carbon::parse($date->date_end)->format('F jS, Y')
                    }}
                    @else
                    {{
                    \Carbon\Carbon::parse($date->date)->format('F, Y')
                    }}
                    @endif
                </div>
            </div>
            @else
            <div class="timeline-end md:mb-10">
                <time class="font-mono italic">{{ $date->title }}</time>
                <div class="text-lg font-black">
                    @if ($date->date_end !== null && !$date->date)
                    {{
                    \Carbon\Carbon::parse($date->date_end)->format('F jS, Y')
                    }}
                    @elseif ($date->date_end !== null)
                    {{
                    \Carbon\Carbon::parse($date->date)->format('F, jS') . ' - ' .
                    \Carbon\Carbon::parse($date->date_end)->format('F jS, Y')
                    }}
                    @else
                    {{
                    \Carbon\Carbon::parse($date->date)->format('F, Y')
                    }}
                    @endif
                </div>
            </div>
            @endif
            @if($index < $importantDates->count() - 1)
                <hr />
                @endif
        </li>
        @endforeach
    </ul>


</div>