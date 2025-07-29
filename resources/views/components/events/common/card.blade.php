@props(['event'])

<div
  class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl">
  <!-- Event Image/Banner -->
  <div class="relative h-48 overflow-hidden">
    @if(isset($event['image']))
    <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" class="w-full h-full object-cover">
  @else
    <!-- Default gradient background -->
    <div class="w-full h-full bg-gradient-to-br {{ $event['bg_color'] ?? 'from-blue-500 to-purple-600' }}"></div>
  @endif
  </div>

  <!-- Event Content -->
  <div class="p-6">
    <!-- Event Title -->
    <h3 class="text-xl font-bold text-gray-900 mb-4 line-clamp-2">
      {{ $event['title'] }}
    </h3>

    <!-- Location and Date Row -->
    <div class="flex justify-between items-center">
      <!-- Event Location (Left) -->
      <div class="flex items-center text-gray-600">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
          </path>
        </svg>
        <span class="text-sm font-medium">{{ $event['location'] ?? 'TBD' }}</span>
      </div>

      <!-- Event Date (Right) -->
      <div class="text-right">
        <span class="text-sm font-bold text-gray-900">{{ $event['date_range'] ?? 'Coming Soon' }}</span>
      </div>
    </div>
  </div>
</div>
