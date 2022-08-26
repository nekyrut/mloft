<nav class="p-6 w-full flex flex-col flex-wrap">
    <div class="hs-accordion-group"  data-hs-accordion-always-open>
        @foreach ($categories as $category)
            @if ($category->childrenCategories->count() > 0)
                <div class="hs-accordion my-2  @if($loop->iteration == 1) active @endif" id="hs-basic-with-arrow-heading-{{ $loop->iteration }}">
                    <button class="hs-accordion-toggle flex justify-between items-center text-left gap-x-3 py-2 px-2.5 w-full text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:bg-slate-800 dark:text-slate-400 dark:hover:text-slate-300" aria-controls="hs-basic-with-arrow-collapse-{{ $loop->iteration }}">
                        {{ $category->title }}
                        <svg class="hs-accordion-active:hidden hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <svg class="hs-accordion-active:block hs-accordion-active:text-gray-600 hs-accordion-active:group-hover:text-gray-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-{{ $loop->iteration }}" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 @if($loop->iteration > 1) hidden @endif" aria-labelledby="hs-basic-with-arrow-heading-{{ $loop->iteration }}">
                        @foreach ($category->childrenCategories as $childCategory)
                        <button class="mx-2 flex justify-between items-center text-left gap-x-3 py-2 px-2.5 max-w-100 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:bg-slate-800 dark:text-slate-400 dark:hover:text-slate-300">
                            @include('components.sitebar.item', ['child_category' => $childCategory])
                        </button>
                        @endforeach
                    </div>
                </div>
            @else
            
            @endif
        
        @endforeach
    </div>
</nav>