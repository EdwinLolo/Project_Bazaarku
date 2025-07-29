@props(['url' => '#', 'text' => 'Login'])

<a href="{{ $url }}"
   class="bg-white text-blue-700 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-150 ease-in-out shadow-md"
   {{ $attributes }}>
    {{ $text }}
</a>
