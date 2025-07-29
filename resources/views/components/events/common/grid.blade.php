@props(['events' => [], 'columns' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3'])

<div class="grid {{ $columns }} gap-6">
  @foreach($events as $event)
    <x-events.common.card :event="$event" />
  @endforeach
</div>
