@props(['menuItems' => []])

@php
$defaultMenuItems = [
    ['route' => 'home', 'label' => 'Home'],
    ['route' => 'tool-rental', 'label' => 'Rental'],
    ['route' => 'events', 'label' => 'Events']
];

$items = empty($menuItems) ? $defaultMenuItems : $menuItems;
@endphp

<div class="md:hidden hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1 bg-blue-600">
        <!-- Mobile Search -->
        <div class="px-3 py-2">
            <x-navbar.search width="w-full" />
        </div>

        <!-- Mobile Navigation Links -->
        @foreach($items as $item)
            <a href="{{ route($item['route']) }}"
                class="block px-3 py-2 text-base font-medium text-white hover:text-blue-200 hover:bg-blue-700 transition duration-150 ease-in-out {{ request()->routeIs($item['route']) ? 'text-blue-200 bg-blue-700' : '' }}">
                {{ $item['label'] }}
            </a>
        @endforeach

        <!-- Mobile Login Button -->
        <div class="px-3 py-2">
            <x-navbar.login class="block w-full text-center" />
        </div>
    </div>
</div>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }
</script>
