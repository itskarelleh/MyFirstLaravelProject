<div class="w-full col-span-3 flex flex-col justify-between">
    <div class="relative w-full scale-75 top-12">
        <!-- Transport Bubble -->
        <div class="bubble bg-gradient-to-b from-emerald-600/90 to-emerald-500/90 relative z-10 w-40 h-40 scale-75 flex flex-col justify-center items-center text-white">
            <div>60%</div>
        </div>

        <!-- Hotel Bubble -->
        <div class="bubble bg-gradient-to-b from-indigo-600/90 to-indigo-500/90 absolute top-24 z-20 right-24 w-28 h-28 scale-75 flex flex-col justify-center items-center text-white">
            <div>30%</div>
        </div>

        <!-- Other Bubble -->
        <div class="bubble absolute w-14 h-14 bg-gradient-to-b from-orange-600/90 to-orange-500/90 top-24 right-6 scale-75 flex flex-col justify-center items-center text-white">
            <div>10%</div>
        </div>
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
