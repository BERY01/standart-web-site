@if ($paginator->hasPages())
    <nav role="navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-danger bg-transparent border cursor-default leading-5 rounded-md">
                <strong class="text-secondary"><</strong>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}#portfolio" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-danger bg-transparent border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                <strong class="text-danger"><</strong>
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}#portfolio" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-danger bg-transparent border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                <strong class="text-danger">></strong>
            </a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-danger bg-transparent border border-gray-300 cursor-default leading-5 rounded-md">
                <strong class="text-secondary">></strong>
            </span>
        @endif
    </nav>

@endif
