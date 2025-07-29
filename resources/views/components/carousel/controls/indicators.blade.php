@props(['slides', 'carouselId'])

<div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-30">
    <div class="flex space-x-3">
        @foreach($slides as $index => $slide)
            <button type="button"
                    class="carousel-indicator w-4 h-4 rounded-full transition-all duration-300 transform hover:scale-110 {{ $index === 0 ? 'bg-yellow-400 shadow-lg' : 'bg-white/50 hover:bg-white/80' }}"
                    data-carousel="{{ $carouselId }}"
                    data-slide="{{ $index }}"
                    aria-label="Slide {{ $index + 1 }}">
            </button>
        @endforeach
    </div>
</div>
