# Navbar Components Documentation

## Overview

Struktur navbar telah dibuat modular dengan komponen yang terorganisir berdasarkan fungsi dan platform:

## Structure

```
resources/views/components/navbar/
├── navbar.blade.php                    # Main navbar component
├── common/                             # Shared components
│   ├── logo.blade.php                  # Logo component
│   ├── search.blade.php                # Search bar component
│   └── login.blade.php                 # Login button component
├── desktop/                            # Desktop-specific components
│   ├── navigation.blade.php            # Desktop navigation menu
│   └── actions.blade.php               # Desktop search + login wrapper
└── mobile/                             # Mobile-specific components
    ├── button.blade.php                # Mobile menu toggle button
    └── menu.blade.php                  # Mobile menu content
```

## Usage

### Basic Usage

```blade
{{-- Use the complete navbar --}}
<x-navbar />
```

### Individual Component Usage

#### Common Components

```blade
{{-- Logo --}}
<x-navbar.common.logo />
<x-navbar.common.logo logo-text="Custom Brand" />

{{-- Search --}}
<x-navbar.common.search />
<x-navbar.common.search placeholder="Search products..." width="w-96" />

{{-- Login --}}
<x-navbar.common.login />
<x-navbar.common.login url="/login" text="Sign In" />
```

#### Desktop Components

```blade
{{-- Desktop navigation --}}
<x-navbar.desktop.navigation />
<x-navbar.desktop.navigation :menu-items="$customMenuItems" />

{{-- Desktop actions (search + login wrapper) --}}
<x-navbar.desktop.actions />
```

#### Mobile Components

```blade
{{-- Mobile menu button --}}
<x-navbar.mobile.button />

{{-- Mobile menu --}}
<x-navbar.mobile.menu />
<x-navbar.mobile.menu :menu-items="$customMenuItems" />
```

## Customization Examples

### Custom Menu Items

```blade
{{-- In your controller or view --}}
@php
$customMenuItems = [
    ['route' => 'home', 'label' => 'Home'],
    ['route' => 'products', 'label' => 'Products'],
    ['route' => 'services', 'label' => 'Services'],
    ['route' => 'about', 'label' => 'About'],
    ['route' => 'contact', 'label' => 'Contact']
];
@endphp

{{-- Custom navbar with different menu items --}}
<nav class="bg-blue-700 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <x-navbar.common.logo logo-text="MyBrand" />
            <x-navbar.desktop.navigation :menu-items="$customMenuItems" />
            <x-navbar.desktop.actions />
            <x-navbar.mobile.button />
        </div>
    </div>
    <x-navbar.mobile.menu :menu-items="$customMenuItems" />
</nav>
```

### Search with Form Handling

```blade
{{-- Create custom desktop actions with form --}}
<div class="hidden md:flex items-center space-x-4">
    <form action="{{ route('search') }}" method="GET" class="inline">
        <x-navbar.common.search
            name="q"
            placeholder="Search products..."
            value="{{ request('q') }}" />
    </form>
    <x-navbar.common.login url="/login" />
</div>
```

### Authentication-based Login

```blade
{{-- Custom desktop actions with auth logic --}}
<div class="hidden md:flex items-center space-x-4">
    <x-navbar.common.search />

    @auth
        <div class="flex items-center space-x-4">
            <span class="text-white">Hello, {{ auth()->user()->name }}</span>
            <form action="/logout" method="POST" class="inline">
                @csrf
                <x-navbar.common.login
                    text="Logout"
                    onclick="this.closest('form').submit(); return false;" />
            </form>
        </div>
    @else
        <x-navbar.common.login url="/login" text="Login" />
    @endauth
</div>
```

### Custom Navbar Layout

```blade
{{-- Completely custom navbar using individual components --}}
<nav class="bg-purple-800 shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            {{-- Custom logo placement --}}
            <div class="flex items-center space-x-8">
                <x-navbar.common.logo logo-text="E-Commerce" />
                <x-navbar.desktop.navigation :menu-items="$mainMenuItems" />
            </div>

            {{-- Custom right side --}}
            <div class="flex items-center space-x-6">
                <x-navbar.common.search placeholder="Search store..." />
                <a href="/cart" class="text-white hover:text-purple-200">
                    Cart ({{ $cartCount }})
                </a>
                <x-navbar.common.login url="/account" text="Account" />
            </div>

            <x-navbar.mobile.button />
        </div>
    </div>

    {{-- Custom mobile menu --}}
    <x-navbar.mobile.menu :menu-items="$mobileMenuItems" />
</nav>
```

## Benefits

1. **Clear Organization**: Components separated by platform (desktop/mobile) and usage (common)
2. **Easy Maintenance**: Each component has a specific purpose and location
3. **Flexible**: Can use individual components or the complete navbar
4. **Reusable**: Common components can be used across desktop and mobile
5. **Customizable**: Easy to override or extend specific parts
6. **Scalable**: Easy to add new components without affecting existing ones

## File Locations

-   **Main navbar**: `resources/views/components/navbar.blade.php`
-   **Common components**: `resources/views/components/navbar/common/`
-   **Desktop components**: `resources/views/components/navbar/desktop/`
-   **Mobile components**: `resources/views/components/navbar/mobile/`
