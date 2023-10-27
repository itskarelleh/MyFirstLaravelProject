@props(['iconClass', 'label', 'url'])

<li class="group h-full text-sm hover:bg-slate-200/50 p-2 rounded-md transition-all ease-in-out">
    <a class="w-full flex flex-row items-center" href="{{ $url }}">
        <i class="{{ $iconClass }} text-xl mr-4 text-slate-500 group-hover:text-slate-950"></i>
        <span class="text-slate-950 font-semibold">{{ $label }}</span>
    </a>
</li>
