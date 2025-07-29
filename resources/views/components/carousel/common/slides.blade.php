@props(['slides', 'carouselId'])

<div class="relative h-96 md:h-[500px] overflow-hidden">
    @foreach($slides as $index => $slide)
        <div class="carousel-slide absolute inset-0 transition-transform duration-700 ease-in-out transform translate-x-full opacity-0 {{ $index === 0 ? 'translate-x-0 opacity-100' : '' }}"
             data-slide="{{ $index }}">

            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 to-gray-900/40"></div>

            @if(isset($slide['image']))
                <img src="{{ $slide['image'] }}"
                     alt="{{ $slide['title'] ?? 'Slide ' . ($index + 1) }}"
                     class="w-full h-full object-cover">
            @else
                <!-- Fallback gradient background -->
                <div class="w-full h-full bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800"></div>
            @endif

            <!-- Content Overlay -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white px-6 max-w-4xl mx-auto">

                    @if(isset($slide['title']))
                        <h1 class="text-4xl md:text-6xl font-bold mb-4 animate-fade-in-up">
                            {{ $slide['title'] }}
                        </h1>
                    @endif

                    @if(isset($slide['subtitle']))
                        <p class="text-xl md:text-2xl mb-6 text-yellow-300 animate-fade-in-up animation-delay-200">
                            {{ $slide['subtitle'] }}
                        </p>
                    @endif

                    @if(isset($slide['description']))
                        <p class="text-lg md:text-xl mb-8 text-gray-200 animate-fade-in-up animation-delay-400">
                            {{ $slide['description'] }}
                        </p>
                    @endif

                    @if(isset($slide['button']))
                        <a href="{{ $slide['button']['url'] ?? '#' }}"
                           class="inline-block bg-yellow-500 hover:bg-yellow-400 text-gray-900 font-bold py-4 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105 animate-fade-in-up animation-delay-600">
                            {{ $slide['button']['text'] ?? 'Learn More' }}
                        </a>
                    @endif

                </div>
            </div>

            <!-- Decorative Elements -->
            <div class="absolute top-10 left-10 w-20 h-20 bg-yellow-400/20 rounded-full animate-float"></div>
            <div class="absolute bottom-20 right-20 w-16 h-16 bg-blue-400/20 rounded-full animate-float animation-delay-1000"></div>
            <div class="absolute top-1/3 right-10 w-12 h-12 bg-purple-400/20 rounded-full animate-float animation-delay-500"></div>
        </div>
    @endforeach
</div>

<style>
@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out forwards;
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}

.animation-delay-200 {
    animation-delay: 0.2s;
}

.animation-delay-400 {
    animation-delay: 0.4s;
}

.animation-delay-500 {
    animation-delay: 0.5s;
}

.animation-delay-600 {
    animation-delay: 0.6s;
}

.animation-delay-1000 {
    animation-delay: 1s;
}
</style>
