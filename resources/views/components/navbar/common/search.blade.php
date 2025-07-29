@props(['placeholder' => 'Search...', 'width' => 'w-80'])

<div class="relative">
    <input type="text" 
           name="{{ $name ?? 'search' }}"
           placeholder="{{ $placeholder }}" 
           value="{{ $value ?? '' }}"
           class="bg-white bg-opacity-90 text-gray-900 placeholder-gray-500 rounded-full pl-6 pr-12 py-3 {{ $width }} focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent focus:bg-opacity-100 transition duration-150"
           {{ $attributes }}>
    <div class="absolute inset-y-0 right-0 pr-4 flex items-center">
        <button type="submit" class="text-gray-500 hover:text-blue-700 transition duration-150">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </button>
    </div>
</div>
