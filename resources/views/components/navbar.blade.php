<nav class="bg-blue-700 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo Section -->
            <x-navbar.common.logo />

            <!-- Desktop Navigation Links -->
            <x-navbar.desktop.navigation />

            <!-- Desktop Actions (Search + Login) -->
            <x-navbar.desktop.actions />

            <!-- Mobile menu button -->
            <x-navbar.mobile.button />
        </div>
    </div>

    <!-- Mobile menu -->
    <x-navbar.mobile.menu />
</nav>
