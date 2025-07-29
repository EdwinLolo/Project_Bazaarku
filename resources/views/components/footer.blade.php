<footer class="bg-blue-700 text-white relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-32 h-32 bg-white rounded-full transform -translate-x-16 -translate-y-16">
        </div>
        <div class="absolute bottom-0 right-0 w-24 h-24 bg-white rounded-full transform translate-x-12 translate-y-12">
        </div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">

            <!-- Logo Section -->
            <div class="flex justify-center md:justify-start">
                <div class="bg-white px-6 py-3 transform -skew-x-12 shadow-lg">
                    <span class="text-blue-700 font-bold text-2xl transform skew-x-12 inline-block">
                        Bazaarku.
                    </span>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="flex justify-center space-x-8">
                <a href="{{ route('home') }}"
                    class="text-white hover:text-blue-200 font-medium text-lg transition duration-150 ease-in-out">
                    Home
                </a>
                <a href="{{ route('tool-rental') }}"
                    class="text-white hover:text-blue-200 font-medium text-lg transition duration-150 ease-in-out">
                    Rental
                </a>
                <a href="{{ route('events') }}"
                    class="text-white hover:text-blue-200 font-medium text-lg transition duration-150 ease-in-out">
                    Events
                </a>
            </div>

            <!-- Right Section: Contact Us & Social Icons -->
            <div class="flex flex-col items-center md:items-end space-y-4">
                <!-- Contact Us Text -->
                <div class="text-white font-bold text-xl">
                    Contact Us
                </div>

                <!-- Social Media Icons -->
                <div class="flex space-x-3">
                    <!-- WhatsApp -->
                    <a href="#"
                        class="bg-white p-3 rounded-full hover:bg-gray-100 transition duration-150 ease-in-out group">
                        <svg class="w-6 h-6 text-green-500 group-hover:text-green-600" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                        </svg>
                    </a>

                    <!-- TikTok -->
                    <a href="#"
                        class="bg-white p-3 rounded-full hover:bg-gray-100 transition duration-150 ease-in-out group">
                        <svg class="w-6 h-6 text-black group-hover:text-gray-800" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-.88-.05A6.33 6.33 0 005.76 20.5a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1.8-.5z" />
                        </svg>
                    </a>

                    <!-- YouTube -->
                    <a href="#"
                        class="bg-white p-3 rounded-full hover:bg-gray-100 transition duration-150 ease-in-out group">
                        <svg class="w-6 h-6 text-red-600 group-hover:text-red-700" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>

                    <!-- Additional Icon (Profile/User) -->
                    <a href="#"
                        class="bg-white p-3 rounded-full hover:bg-gray-100 transition duration-150 ease-in-out group">
                        <svg class="w-6 h-6 text-gray-600 group-hover:text-gray-700" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="border-t border-blue-400 border-opacity-30 mt-8 pt-6 text-center">
            <p class="text-white text-sm font-medium">
                Hak Cipta © {{ date('Y') }} Bazaarku. Hak Cipta Dilindungi Undang-undang.
            </p>
        </div>
    </div>
</footer>
