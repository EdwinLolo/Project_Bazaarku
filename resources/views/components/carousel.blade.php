@props(['slides' => [], 'autoSlide' => true, 'interval' => 5000, 'showControls' => true, 'showIndicators' => true, 'height' => 'h-80'])

@php
    $carouselId = 'carousel-' . uniqid();
    $defaultSlides = [
        [
            'title' => 'Welcome to Bazaarku',
            'subtitle' => 'Your marketplace for everything',
            'description' => 'Find the best deals and products',
            'button' => ['text' => 'Shop Now', 'url' => '/shop'],
            'bg_color' => 'from-blue-600 to-purple-700'
        ],
        [
            'title' => 'Tool Rental',
            'subtitle' => 'Rent tools for your projects',
            'description' => 'Professional tools at affordable prices',
            'button' => ['text' => 'Browse Tools', 'url' => '/tool-rental'],
            'bg_color' => 'from-green-600 to-blue-700'
        ]
    ];

    $slidesData = empty($slides) ? $defaultSlides : $slides;
@endphp

<div class="relative w-full max-w-6xl mx-auto {{ $height }} rounded-xl overflow-hidden shadow-lg bg-gray-900"
    id="{{ $carouselId }}">

    <!-- Slides Container -->
    <div class="relative w-full h-full overflow-hidden">
        <div class="carousel-wrapper flex transition-transform duration-500 ease-in-out h-full"
            style="width: {{ count($slidesData) * 100 }}%; transform: translateX(0%);">

            @foreach($slidesData as $index => $slide)
                <div class="carousel-slide flex-shrink-0 w-full h-full relative"
                    style="width: {{ 100 / count($slidesData) }}%;">

                    <!-- Background -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br {{ $slide['bg_color'] ?? 'from-blue-600 to-purple-700' }}">
                    </div>

                    <!-- Decorative Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-10 left-10 w-32 h-32 border-4 border-white rounded-full animate-pulse">
                        </div>
                        <div
                            class="absolute bottom-10 right-10 w-24 h-24 border-4 border-yellow-300 rounded-full animate-pulse delay-1000">
                        </div>
                        <div
                            class="absolute top-1/2 right-20 w-16 h-16 border-4 border-pink-300 rounded-full animate-pulse delay-500">
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="relative z-10 flex items-center justify-center h-full px-8">
                        <div class="text-center text-white max-w-2xl">

                            @if(isset($slide['title']))
                                <h2 class="text-3xl md:text-5xl font-bold mb-4 leading-tight">
                                    {{ $slide['title'] }}
                                </h2>
                            @endif

                            @if(isset($slide['subtitle']))
                                <p class="text-lg md:text-xl mb-4 text-yellow-300 font-semibold">
                                    {{ $slide['subtitle'] }}
                                </p>
                            @endif

                            @if(isset($slide['description']))
                                <p class="text-base md:text-lg mb-6 text-gray-200">
                                    {{ $slide['description'] }}
                                </p>
                            @endif

                            @if(isset($slide['button']))
                                <a href="{{ $slide['button']['url'] ?? '#' }}"
                                    class="inline-block bg-yellow-500 hover:bg-yellow-400 text-gray-900 font-bold py-3 px-6 rounded-full text-base transition duration-300 transform hover:scale-105">
                                    {{ $slide['button']['text'] ?? 'Learn More' }}
                                </a>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    @if($showControls && count($slidesData) > 1)
        <!-- Navigation Controls -->
        <button
            class="carousel-prev absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white p-2 rounded-full transition duration-300 z-20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button
            class="carousel-next absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white p-2 rounded-full transition duration-300 z-20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    @endif

    @if($showIndicators && count($slidesData) > 1)
        <!-- Slide Indicators -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
            @foreach($slidesData as $index => $slide)
                <button
                    class="carousel-indicator w-3 h-3 rounded-full transition duration-300 {{ $index === 0 ? 'bg-white' : 'bg-white/50' }}"
                    data-slide="{{ $index }}"></button>
            @endforeach
        </div>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.getElementById('{{ $carouselId }}');
        if (!carousel) return;

        const wrapper = carousel.querySelector('.carousel-wrapper');
        const slides = carousel.querySelectorAll('.carousel-slide');
        const prevBtn = carousel.querySelector('.carousel-prev');
        const nextBtn = carousel.querySelector('.carousel-next');
        const indicators = carousel.querySelectorAll('.carousel-indicator');

        let currentSlide = 0;
        const totalSlides = slides.length;
        let autoSlideInterval;

        function updateCarousel() {
            const translateX = -(currentSlide * (100 / totalSlides));
            wrapper.style.transform = `translateX(${translateX}%)`;

            // Update indicators
            indicators.forEach((indicator, index) => {
                if (index === currentSlide) {
                    indicator.classList.remove('bg-white/50');
                    indicator.classList.add('bg-white');
                } else {
                    indicator.classList.remove('bg-white');
                    indicator.classList.add('bg-white/50');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }

        function goToSlide(slideIndex) {
            currentSlide = slideIndex;
            updateCarousel();
        }

        // Navigation controls
        if (nextBtn) {
            nextBtn.addEventListener('click', nextSlide);
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', prevSlide);
        }

        // Indicator controls
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => goToSlide(index));
        });

        // Auto slide
        @if($autoSlide && count($slidesData) > 1)
            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, {{ $interval }});
            }

            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
            }

            // Start auto slide
            startAutoSlide();

            // Pause on hover
            carousel.addEventListener('mouseenter', stopAutoSlide);
            carousel.addEventListener('mouseleave', startAutoSlide);
        @endif
});
</script>
