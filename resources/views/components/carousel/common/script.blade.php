@props(['carouselId', 'autoSlide', 'interval'])

<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('{{ $carouselId }}');
    if (!carousel) return;

    const autoSlideEnabled = carousel.dataset.autoSlide === 'true';
    const slideInterval = parseInt(carousel.dataset.interval) || 5000;

    const slides = carousel.querySelectorAll('.carousel-slide');
    const indicators = carousel.querySelectorAll('.carousel-indicator');
    const prevBtn = carousel.querySelector('.carousel-prev');
    const nextBtn = carousel.querySelector('.carousel-next');

    let currentSlide = 0;
    let autoSlideTimer;

    function goToSlide(index) {
        slides[currentSlide].classList.remove('translate-x-0', 'opacity-100');
        slides[currentSlide].classList.add('translate-x-full', 'opacity-0');

        if (indicators[currentSlide]) {
            indicators[currentSlide].classList.remove('bg-yellow-400', 'shadow-lg');
            indicators[currentSlide].classList.add('bg-white/50');
        }

        currentSlide = index;
        slides[currentSlide].classList.remove('translate-x-full', 'opacity-0');
        slides[currentSlide].classList.add('translate-x-0', 'opacity-100');

        if (indicators[currentSlide]) {
            indicators[currentSlide].classList.remove('bg-white/50');
            indicators[currentSlide].classList.add('bg-yellow-400', 'shadow-lg');
        }
    }

    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        goToSlide(next);
    }

    function previousSlide() {
        const prev = (currentSlide - 1 + slides.length) % slides.length;
        goToSlide(prev);
    }

    function startAutoSlide() {
        if (autoSlideEnabled) {
            autoSlideTimer = setInterval(nextSlide, slideInterval);
        }
    }

    function stopAutoSlide() {
        if (autoSlideTimer) {
            clearInterval(autoSlideTimer);
            autoSlideTimer = null;
        }
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            stopAutoSlide();
            previousSlide();
            startAutoSlide();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });
    }

    indicators.forEach(function(indicator, index) {
        indicator.addEventListener('click', function() {
            stopAutoSlide();
            goToSlide(index);
            startAutoSlide();
        });
    });

    carousel.addEventListener('mouseenter', stopAutoSlide);
    carousel.addEventListener('mouseleave', startAutoSlide);

    let startX = 0;
    let startY = 0;

    carousel.addEventListener('touchstart', function(e) {
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
    });

    carousel.addEventListener('touchend', function(e) {
        const endX = e.changedTouches[0].clientX;
        const endY = e.changedTouches[0].clientY;
        const deltaX = endX - startX;
        const deltaY = endY - startY;

        if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > 50) {
            stopAutoSlide();
            if (deltaX > 0) {
                previousSlide();
            } else {
                nextSlide();
            }
            startAutoSlide();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (carousel.matches(':hover')) {
            if (e.key === 'ArrowLeft') {
                stopAutoSlide();
                previousSlide();
                startAutoSlide();
            } else if (e.key === 'ArrowRight') {
                stopAutoSlide();
                nextSlide();
                startAutoSlide();
            }
        }
    });

    startAutoSlide();
});
</script>
