@props(['events' => [], 'title' => 'Upcoming events', 'subtitle' => '', 'showViewAll' => true, 'viewAllUrl' => '/events', 'columns' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3'])

@php
    $defaultEvents = [
        [
            'title' => 'Urban Sneaker Society 2024',
            'location' => 'ICE BSD',
            'date_range' => 'Oct 25-27',
            'bg_color' => 'from-gray-900 to-gray-700'
        ],
        [
            'title' => 'Wonderland by USS 2024',
            'location' => 'JIEXPO',
            'date_range' => 'March 17-19',
            'bg_color' => 'from-pink-400 to-purple-500'
        ],
        [
            'title' => 'USS YARD SALE',
            'location' => 'City Hall, PIM 3',
            'date_range' => 'March 29-31',
            'bg_color' => 'from-blue-600 to-indigo-700'
        ]
    ];

    $eventsData = empty($events) ? $defaultEvents : $events;
@endphp

<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header - Left Aligned -->
        <div class="mb-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-blue-700 mb-2">
                {{ $title }}
            </h2>
            @if($subtitle)
                <p class="text-lg text-gray-600">
                    {{ $subtitle }}
                </p>
            @endif
        </div>

        <!-- Events Grid -->
        <x-events.common.grid :events="$eventsData" :columns="$columns" />

        <!-- View All Button -->
        @if($showViewAll && count($eventsData) > 0)
            <div class="text-left mt-10">
                <a href="{{ $viewAllUrl }}"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                    Lihat Semua Event
                    <svg class="w-5 h-5 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </a>
            </div>
        @endif
    </div>
</section>
