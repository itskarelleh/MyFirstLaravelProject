<div class="bg-white rounded-lg hover:shadow-md p-4 {{ $additionalClasses }}">
    <div class="flex justify-between items-center">
        <h2 class="text-sm text-slate-500 font-semibold">{{ $title }}</h2>
        <div class="relative group">
            <button class="flex flex-col items-center justify-center focus:outline-none w-6 h-6 rounded-full hover:bg-slate-200 transition-all ease-in">
                <i class="iconoir-more-vert text-gray-600 group-hover:text-gray-800 scale-75"></i>
            </button>
        </div>
    </div>
    <div class="mt-2">
        <p class="text-gray-700 text-2xl font-bold">{!! $mainContent !!}</p>
    </div>
    <div class="mt-2">
            {!! $subContent !!}
    </div>
</div>
