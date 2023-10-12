<div class="overflow-y-auto">
    <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-4">
        <div class="">
            <!-- Calendar -->
            <div class="flex flex-row space-x-4 justify-between">
                <h2>Timeline</h2>
                <button class="rounded-md text-xs text-semibold bg-slate-950 hover:bg-blue-600 transition-all ease-in-out text-white text-center p-2">Add event <i class="iconoir-plus"></i></button>
            </div>
            <div class="flex justify-between items-center">
                <h3>September</h3>
                <div class="text-sm space-x-2">
                    <button><i class="iconoir-nav-arrow-left"></i></button>
                    <button><i class="iconoir-nav-arrow-right"></i></button>
                </div>
            </div>
            <table class="w-full">
                <thead>
                <tr class="[&>th]:text-sm">
                    <th class="w-1/7">Sun</th>
                    <th class="w-1/7">Mon</th>
                    <th class="w-1/7">Tue</th>
                    <th class="w-1/7">Wed</th>
                    <th class="w-1/7">Thu</th>
                    <th class="w-1/7">Fri</th>
                    <th class="w-1/7">Sat</th>
                </tr>
                </thead>
                <tbody>
                @php
                    // Get the first day of September
                    $firstDay = strtotime('2023-09-01');
                    // Calculate the day of the week (0 - Sunday, 1 - Monday, etc.) for the first day
                    $dayOfWeek = date('w', $firstDay);
                    // Initialize a variable to track the current day
                    $currentDay = 1;
                    // Determine the number of empty cells before the first day
                    $emptyCells = $dayOfWeek;
                @endphp

                @for ($i = 0; $i < 6; $i++)
                    <tr>
                        @for ($j = 0; $j < 7; $j++)
                            <td class="w-1/7 text-sm text-center py-4"> {{-- Add padding to increase vertical spacing between rows --}}
                                @if ($emptyCells > 0)
                                    {{-- Display empty cell --}}
                                    @php
                                        $emptyCells--;
                                    @endphp
                                @elseif ($currentDay <= 30) {{-- Assuming September has 30 days --}}
                                {{-- Display day of the month --}}
                                {{ $currentDay }}
                                @php
                                    $currentDay++;
                                @endphp
                                @endif
                            </td>
                        @endfor
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
        <div class="">
            <!-- Vertical Timeline -->
            @php
                // Generate time slots from 8:00 AM to 8:00 PM in half-hour intervals
                $startTime = strtotime('08:00');
                $endTime = strtotime('20:00');
                $currentTime = $startTime;
            @endphp
            <div class="w-full p-4">
                @while ($currentTime <= $endTime)
                    @php
                        $timeLabel = date('g:i A', $currentTime);
                    @endphp
                    <div class="mb-4 flex items-center">
                        <div class="text-gray-600 text-sm mr-2">{{ $timeLabel }}</div>
                        <div class="flex-1 h-0.5 bg-gray-300"></div>
                    </div>
                    @php
                        $currentTime += 1800; // Increment by 30 minutes
                    @endphp
                @endwhile
            </div>
        </div>
    </div>
</div>
