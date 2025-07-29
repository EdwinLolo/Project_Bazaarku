@props(['title' => 'Tool Rentals'])

<section class="py-16 px-4 max-w-7xl mx-auto">
    <h2 class="text-3xl font-extrabold text-blue-600 mb-12">{{ $title }}</h2>

    <x-tool-rental.grid />
</section>
