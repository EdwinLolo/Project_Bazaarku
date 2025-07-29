@props(['carouselId'])

<!-- Previous Button -->
<button type="button"
        class="carousel-prev absolute top-1/2 left-4 z-30 flex items-center justify-center h-12 w-12 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full text-white hover:text-yellow-300 transition-all duration-300 transform -translate-y-1/2 hover:scale-110"
        data-carousel="{{ $carouselId }}"
        data-action="prev">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path>
    </svg>
    <span class="sr-only">Previous slide</span>
</button>

<!-- Next Button -->
<button type="button"
        class="carousel-next absolute top-1/2 right-4 z-30 flex items-center justify-center h-12 w-12 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full text-white hover:text-yellow-300 transition-all duration-300 transform -translate-y-1/2 hover:scale-110"
        data-carousel="{{ $carouselId }}"
        data-action="next">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path>
    </svg>
    <span class="sr-only">Next slide</span>
</button>
