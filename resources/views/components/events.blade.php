@props(['type' => 'upcoming', 'events' => [], 'title' => '', 'subtitle' => '', 'showViewAll' => true, 'viewAllUrl' => '/events', 'columns' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3'])

@switch($type)
    @case('upcoming')
        <x-events.upcoming
            :events="$events"
            :title="$title ?: 'Upcoming events'"
            :subtitle="$subtitle"
            :show-view-all="$showViewAll"
            :view-all-url="$viewAllUrl"
            :columns="$columns" />
        @break

    @case('grid')
        <x-events.common.grid :events="$events" :columns="$columns" />
        @break

    @case('card')
        @if(isset($events[0]))
            <x-events.common.card :event="$events[0]" />
        @endif
        @break
          @default
        <x-events.upcoming
            :events="$events"
            :title="$title ?: 'Events'"
            :subtitle="$subtitle"
            :show-view-all="$showViewAll"
            :view-all-url="$viewAllUrl"
            :columns="$columns" />
@endswitch
