<div class="grid grid-cols-5 w-full gap-2">
    @foreach($days as $day)
        <div class="col-span-1">
            <img width="200" class="w-full" src="{{$day['icon']}}" alt="cloudy" />
            <p class="font-semibold">{{$day['temp']}}</p>
            <p class="text-gray-400">{{$day['day']}}</p>
        </div>
    @endforeach
</div>
