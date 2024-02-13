 <div class="flex flex-col p-[10px] shadow-lg rounded-xl bg-[#ffffffaa] dark:bg-[#333333] mb-[50px] max-w-[500px] mx-auto">
    <div class="flex flex-row w-full h-[150px] relative">
        <div class="absolute z-20 left-0 flex flex-col h-[150px]">
            <h2 class="flex text-sm min-[450px]:text-base min-h-[40px] items-center rounded p-[10px] mb-[5px] text-[#000] dark:text-[#fff] border-[#33333340] dark:border-[#aaaaaa40] border bg-[#ffffffaa] dark:bg-[#33333390]">{{ $projectTitle }}</h2>
            <h3 class="flex text-sm min-[450px]:text-base min-h-[40px] items-center rounded p-[10px] mb-[5px] text-[#000] dark:text-[#fff] border-[#33333340] dark:border-[#aaaaaa40] border bg-[#ffffffaa] dark:bg-[#33333390] font-bold"> {{ $achievement }} </h3>
            <a class="bottom-0 left-0 z-20 w-[50px]" href="{{ $link }}" target="_blank"><div class="flex justify-center items-center w-[50px] h-[50px] m-[5px] rounded-lg text-3xl buttonhover border border-[#00006665] dark:border-[#bbbbff95]"> <span class="brightness-125 dark:invert">&#128279;</span></div></a>
        </div>
        <img loading="lazy" class="absolute flex shrink-0 z-10 right-0 w-[150px] h-[150px] bg-[#4658B7] rounded {{ $imgTailwind }}" src="{{ $image }}" style="
            mask-image: linear-gradient(to right, transparent, black 50%); -webkit-mask-image:linear-gradient(to right, transparent, black 50%);
            mask-image: linear-gradient(to right, transparent, black 50%); -webkit-mask-image:linear-gradient(to right, transparent, black 50%);">
    </div>
    <div class="">
        <details>
            <summary class="text-[#000] dark:text-[#fff] text-base max-[450px]:text-sm text-start mt-[5px] cursor-pointer">{{ $summary }}</summary>
            <p class="text-[#333] dark:text-[#ccc] text-base max-[450px]:text-sm">{!! $details !!}</p>
        </details>
    </div>
</div>

<!-- max-[450px]:flex-col -->