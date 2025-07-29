@props(['image', 'category', 'title', 'description', 'size' => 'normal'])

@php
    $sizeClasses = [
        'large' => 'aspect-[16/9]', // Lebih lebar untuk kartu besar
        'normal' => 'aspect-[4/3]'  // Rasio normal untuk kartu kecil
    ];
    $currentSizeClass = $sizeClasses[$size] ?? $sizeClasses['normal'];

    $paddingClasses = [
        'large' => 'p-8',   // Padding lebih besar untuk kartu besar
        'normal' => 'p-6'   // Padding normal untuk kartu kecil
    ];
    $currentPaddingClass = $paddingClasses[$size] ?? $paddingClasses['normal'];

    $titleSizeClasses = [
        'large' => 'text-2xl',  // Title lebih besar untuk kartu besar
        'normal' => 'text-xl'   // Title normal untuk kartu kecil
    ];
    $currentTitleSizeClass = $titleSizeClasses[$size] ?? $titleSizeClasses['normal'];
@endphp

<div
    class="group relative overflow-hidden rounded-xl bg-gray-200 {{ $currentSizeClass }} cursor-pointer transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
    <!-- Background Image -->
    <img src="{{ $image }}" alt="{{ $title }}"
        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

    <!-- Gradient Overlay -->
    <div
        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-300">
    </div>
    <!-- Content Overlay -->
    <div class="absolute inset-0 flex flex-col justify-end {{ $currentPaddingClass }}">
        <!-- Mobile: Always visible, Desktop: Visible on hover -->
        <div
            class="text-white transform transition-all duration-300 md:translate-y-4 md:opacity-0 md:group-hover:translate-y-0 md:group-hover:opacity-100">
            <!-- Category Badge -->
            <span class="inline-block px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full mb-3">
                {{ $category }}
            </span>

            <!-- Title -->
            <h3 class="{{ $currentTitleSizeClass }} font-bold mb-2 text-white">
                {{ $title }}
            </h3>

            <!-- Description -->
            <p class="text-gray-200 text-sm leading-relaxed line-clamp-2">
                {{ $description }}
            </p>
        </div>

        <!-- Desktop: Title always visible at bottom -->
        <div
            class="hidden md:block absolute bottom-{{ $size === 'large' ? '8' : '6' }} left-{{ $size === 'large' ? '8' : '6' }} right-{{ $size === 'large' ? '8' : '6' }} group-hover:opacity-0 transition-opacity duration-300">
            <h3 class="{{ $currentTitleSizeClass }} font-bold text-white">
                {{ $title }}
            </h3>
        </div>
    </div>

    <!-- Hover Ring Effect -->
    <div class="absolute inset-0 ring-0 ring-blue-500 rounded-xl transition-all duration-300 group-hover:ring-2"></div>
</div>
