@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between gap-4">
            <!-- Mobile Controls -->
            <div class="flex justify-between flex-1 sm:hidden">
                @if ($paginator->onFirstPage())
                    <span class="relative inline-flex items-center px-3 py-1.5 text-xs font-medium text-slate-400 bg-white border border-slate-200 cursor-default rounded-md">
                        Previous
                    </span>
                @else
                    <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" class="relative inline-flex items-center px-3 py-1.5 text-xs font-medium text-slate-700 bg-white border border-slate-200 rounded-md hover:bg-slate-50 transition-colors">
                        Previous
                    </button>
                @endif

                @if ($paginator->hasMorePages())
                    <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" class="relative inline-flex items-center px-3 py-1.5 text-xs font-medium text-slate-700 bg-white border border-slate-200 rounded-md hover:bg-slate-50 transition-colors">
                        Next
                    </button>
                @else
                    <span class="relative inline-flex items-center px-3 py-1.5 text-xs font-medium text-slate-400 bg-white border border-slate-200 cursor-default rounded-md">
                        Next
                    </span>
                @endif
            </div>

            <!-- Desktop Controls -->
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-xs text-slate-500">
                        <span>Showing</span>
                        <span class="font-semibold text-slate-800">{{ $paginator->firstItem() }}</span>
                        <span>to</span>
                        <span class="font-semibold text-slate-800">{{ $paginator->lastItem() }}</span>
                        <span>of</span>
                        <span class="font-semibold text-slate-800">{{ $paginator->total() }}</span>
                        <span>results</span>
                    </p>
                </div>

                <div>
                    <div class="inline-flex items-center gap-1.5">
                        {{-- Previous Page Link --}}
                        @if ($paginator->onFirstPage())
                            <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                                <span class="inline-flex items-center justify-center w-8 h-8 text-xs font-medium text-slate-300 bg-slate-50 border border-slate-200 rounded-md cursor-default">
                                    <i class="ri-arrow-left-s-line text-sm"></i>
                                </span>
                            </span>
                        @else
                            <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" class="inline-flex items-center justify-center w-8 h-8 text-xs font-medium text-slate-600 bg-white border border-slate-200 rounded-md hover:bg-[#FFF4E5] hover:text-[#FF8B02] hover:border-[#FFD199] transition-colors cursor-pointer" aria-label="{{ __('pagination.previous') }}">
                                <i class="ri-arrow-left-s-line text-sm"></i>
                            </button>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <span aria-disabled="true">
                                    <span class="inline-flex items-center justify-center w-8 h-8 text-xs font-medium text-slate-400 bg-white border border-slate-200 rounded-md cursor-default">{{ $element }}</span>
                                </span>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    <span wire:key="paginator-{{ $paginator->getPageName() }}-page{{ $page }}">
                                        @if ($page == $paginator->currentPage())
                                            <span aria-current="page">
                                                <span class="inline-flex items-center justify-center w-8 h-8 text-xs font-semibold text-white bg-[#FF8B02] border border-[#FF8B02] rounded-md shadow-xs">{{ $page }}</span>
                                            </span>
                                        @else
                                            <button type="button" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" class="inline-flex items-center justify-center w-8 h-8 text-xs font-medium text-slate-700 bg-white border border-slate-200 rounded-md hover:bg-[#FFF4E5] hover:text-[#FF8B02] hover:border-[#FFD199] transition-colors cursor-pointer" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                {{ $page }}
                                            </button>
                                        @endif
                                    </span>
                                @endforeach
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" class="inline-flex items-center justify-center w-8 h-8 text-xs font-medium text-slate-600 bg-white border border-slate-200 rounded-md hover:bg-[#FFF4E5] hover:text-[#FF8B02] hover:border-[#FFD199] transition-colors cursor-pointer" aria-label="{{ __('pagination.next') }}">
                                <i class="ri-arrow-right-s-line text-sm"></i>
                            </button>
                        @else
                            <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                                <span class="inline-flex items-center justify-center w-8 h-8 text-xs font-medium text-slate-300 bg-slate-50 border border-slate-200 rounded-md cursor-default">
                                    <i class="ri-arrow-right-s-line text-sm"></i>
                                </span>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    @endif
</div>
