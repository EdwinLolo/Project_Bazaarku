<x-layouts.app title="Home - Bazarku">
    <!-- Hero Carousel Section -->
    <section class="py-8 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $carouselSlides = [
                    [
                        'title' => 'Grand Opening',
                        'subtitle' => '123 Anywhere St, Anycity, ST 12345',
                        'description' => '25 Agustus 2023 - Bergabunglah dengan perayaan pembukaan toko kami',
                        'button' => ['text' => 'Kunjungi Toko', 'url' => '/shop'],
                        'bg_color' => 'from-indigo-800 to-purple-900'
                    ],
                    [
                        'title' => 'Sewa Alat Berkualitas',
                        'subtitle' => 'Peralatan profesional untuk proyek Anda',
                        'description' => 'Dari alat listrik hingga peralatan taman, tersedia dengan harga terjangkau',
                        'button' => ['text' => 'Lihat Alat', 'url' => route('tool-rental')],
                        'bg_color' => 'from-green-700 to-blue-800'
                    ],
                    [
                        'title' => 'Event & Workshop Menarik',
                        'subtitle' => 'Bergabunglah dengan komunitas kami',
                        'description' => 'Pelajari keterampilan baru melalui workshop dan pelatihan profesional',
                        'button' => ['text' => 'Lihat Event', 'url' => route('events')],
                        'bg_color' => 'from-red-700 to-orange-800'
                    ],
                    [
                        'title' => 'Bazarku Festival',
                        'subtitle' => 'Perayaan komunitas tahunan',
                        'description' => 'Food truck, musik live, games, dan banyak hadiah menarik menanti Anda',
                        'button' => ['text' => 'Info Lengkap', 'url' => route('events')],
                        'bg_color' => 'from-pink-700 to-purple-800'
                    ]
                ];
            @endphp

            <x-carousel :slides="$carouselSlides" :auto-slide="true" :interval="5000" height="h-96" />
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <x-events type="upcoming" />

    <!-- Tool Rental Section -->
    <section class="bg-white">
        <x-tool-rental title="Tool Rentals" />
    </section>
</x-layouts.app>
