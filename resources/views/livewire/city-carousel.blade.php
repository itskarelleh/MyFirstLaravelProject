<div class="w-full col-span-9 mx-auto relative transition-all ease-in">
    <div class="flex flex-col absolute top-1/4 px-4 h-full transition-all ease-in">
        <div class="flex flex-col-reverse">
            <h1 class="font-bold mt-2 transition-all ease-in">{{ $cities[$currentIndex]['city'] }}</h1>
            <h4 class="text-sm font-semibold ">Nearest trip</h4>
        </div>
        <div class="mt-6 flex flex-row space-x-4">
            <button wire:click="previous" class="hover:bg-white transition-all ease-in rounded-full w-10 h-10 flex flex-col items-center justify-center text-gray-600">&larr; </button>
            <button wire:click="next" class="hover:bg-white transition-all ease-in rounded-full w-10 h-10 flex flex-col items-center justify-center text-gray-600">&rarr;</button>
        </div>
    </div>
    <img width="765" src="{{$cities[$currentIndex]['image']}}" alt="{{$cities[$currentIndex]['city'] }}" class="rounded-lg transition-all ease-in">
</div>
