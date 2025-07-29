<nav class="bg-blue-700 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo Section -->
            <x-navbar.logo />

            <!-- Center Navigation Links -->
            <x-navbar.navigation />

            <!-- Right side: Search bar and Login button -->
            <div class="hidden md:flex items-center space-x-4">
                <x-navbar.search />
                <x-navbar.login />
            </div>

            <!-- Mobile menu button -->
            <x-navbar.mobile-button />
        </div>
    </div>

    <!-- Mobile menu -->
    <x-navbar.mobile-menu />
</nav>
