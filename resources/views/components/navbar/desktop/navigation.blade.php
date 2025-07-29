@props(['menuItems' => []])

@php
  $defaultMenuItems = [
    ['route' => 'home', 'label' => 'Home'],
    ['route' => 'tool-rental', 'label' => 'Rental'],
    ['route' => 'events', 'label' => 'Events']
  ];

  $items = empty($menuItems) ? $defaultMenuItems : $menuItems;
@endphp

<div class="hidden md:flex items-center space-x-12">
  @foreach($items as $item)
    <a href="{{ route($item['route']) }}"
    class="text-white hover:text-blue-200 px-4 py-2 text-lg font-medium transition duration-150 ease-in-out {{ request()->routeIs($item['route']) ? 'text-blue-200' : '' }}">
    {{ $item['label'] }}
    </a>
  @endforeach
</div>
