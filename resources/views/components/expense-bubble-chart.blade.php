<div class="w-full col-span-3 flex flex-col justify-between items-center">
    <h3 class="text-neutral-500 w-full text-left relative top-8 font-semibold">Expenses</h3>
        <div class="scale-75">
            {!! file_get_contents('expense-chart.svg') !!}
        </div>
    <div class="relative bottom-8">
        <ul class="text-xs flex flex-row justify-center space-x-4">
           <li class="font-semibold flex flex-row space-x-2 justify-center items-center"><div class="bg-transparent w-2 h-2 rounded-full border-2 border border-emerald-500 mr-2"></div> Transport</li>
           <li class="font-semibold flex flex-row space-x-2 justify-center items-center"><div class="bg-transparent w-2 h-2 rounded-full border-2 border border-indigo-600 mr-2"></div> Hotel</li>
           <li class="font-semibold flex flex-row space-x-2 justify-center items-center"><div class="bg-transparent w-2 h-2 rounded-full border-2 border border-orange-500 mr-2"></div> Other</li>
        </ul>
    </div>
</div>

<style>
    .bubble {
        border-radius: 50%;
        display: flex;
        flex-col: items-center justify-center text-white font-bold text-lg;
        position: absolute;
    }
</style>
