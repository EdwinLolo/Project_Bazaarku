# Events Components Documentation

## Overview

Komponen events yang modular untuk menampilkan upcoming events, event cards, dan event grids dengan desain yang menarik dan responsive.

## Structure

```
resources/views/components/events/
├── events.blade.php              # Main events component
├── upcoming.blade.php            # Upcoming events section
└── common/                       # Shared components
    ├── card.blade.php            # Individual event card
    └── grid.blade.php            # Events grid layout
```

## Features

-   ✅ **Responsive Cards**: Event cards yang adaptif untuk semua device
-   ✅ **Multiple Layouts**: Grid, single card, atau full section
-   ✅ **Custom Styling**: Background colors, badges, dan themes
-   ✅ **Interactive Elements**: Hover effects dan smooth transitions
-   ✅ **Flexible Content**: Support untuk gambar, tanggal, lokasi, deskripsi
-   ✅ **Call-to-Action**: Button untuk setiap event dengan custom URL

## Basic Usage

### Simple Upcoming Events

```blade
<x-events />
{{-- atau --}}
<x-events type="upcoming" />
```

### Custom Upcoming Events

```blade
<x-events
    type="upcoming"
    :events="$customEvents"
    title="Event Mendatang"
    subtitle="Jangan lewatkan kesempatan emas ini"
    :show-view-all="true"
    view-all-url="/semua-event" />
```

## Event Data Structure (Simplified)

```php
$events = [
    [
        'title' => 'Urban Sneaker Society 2024',
        'location' => 'ICE BSD',
        'date_range' => 'Oct 25-27',
        'bg_color' => 'from-gray-900 to-gray-700'
    ],
    [
        'title' => 'Wonderland by USS 2024',
        'location' => 'JIEXPO',
        'date_range' => 'March 17-19',
        'bg_color' => 'from-pink-400 to-purple-500'
    ],
    // More events...
];
```

## Card Design Features (Updated)

-   ✅ **Minimalist Design**: No badges, descriptions, or action buttons
-   ✅ **Clean Title**: Event name in bold black text
-   ✅ **Bottom Info Bar**: Location with icon (left) and date (right)
-   ✅ **Gradient Backgrounds**: Beautiful gradient overlays
-   ✅ **Hover Effects**: Scale and shadow on hover

## Section Header Style (Updated)

-   ✅ **Left-aligned**: "Upcoming events" positioned to the left
-   ✅ **Blue Color**: Title in blue (#1d4ed8) for brand consistency
-   ✅ **No Subtitle**: Clean, minimal approach
-   ✅ **Left-aligned Button**: "Lihat Semua Event" button also left-aligned

## Component Types

### 1. Upcoming Events Section

```blade
<x-events type="upcoming" :events="$events" />
```

### 2. Events Grid Only

```blade
<x-events type="grid" :events="$events" columns="grid-cols-1 md:grid-cols-2" />
```

### 3. Single Event Card

```blade
<x-events type="card" :events="[$singleEvent]" />
```

## Props

### Main Events Component

| Prop          | Type    | Default                                       | Description                          |
| ------------- | ------- | --------------------------------------------- | ------------------------------------ |
| `type`        | String  | `'upcoming'`                                  | Component type: upcoming, grid, card |
| `events`      | Array   | `[]`                                          | Array of event data                  |
| `title`       | String  | `'Upcoming Events'`                           | Section title                        |
| `subtitle`    | String  | `''`                                          | Section subtitle                     |
| `showViewAll` | Boolean | `true`                                        | Show "View All" button               |
| `viewAllUrl`  | String  | `'/events'`                                   | URL for "View All" button            |
| `columns`     | String  | `'grid-cols-1 md:grid-cols-2 lg:grid-cols-3'` | Grid columns                         |

### Individual Card Component

| Prop    | Type  | Required | Description       |
| ------- | ----- | -------- | ----------------- |
| `event` | Array | Yes      | Event data object |

## Examples

### Event Showcase (Based on Image)

```blade
@php
$upcomingEvents = [
    [
        'title' => 'Urban Sneaker Society 2024',
        'location' => 'ICE BSD',
        'date' => '25-27',
        'month' => 'Oct',
        'date_range' => 'Oct 25-27',
        'description' => 'Event sneaker terbesar di Indonesia dengan brand-brand ternama.',
        'bg_color' => 'from-gray-900 to-gray-700',
        'badge' => 'Trending',
        'badge_color' => 'red',
        'button' => ['text' => 'Info Lengkap', 'url' => '/events/uss']
    ],
    [
        'title' => 'Wonderland by USS 2024',
        'location' => 'JIEXPO',
        'date' => '17-19',
        'month' => 'Mar',
        'date_range' => 'March 17-19',
        'description' => 'Festival musik dan seni dengan tema wonderland.',
        'bg_color' => 'from-pink-400 to-purple-500',
        'badge' => 'Popular',
        'badge_color' => 'pink',
        'button' => ['text' => 'Beli Tiket', 'url' => '/events/wonderland']
    ],
    [
        'title' => 'USS YARD SALE',
        'location' => 'City Hall, PIM 3',
        'date' => '29-31',
        'month' => 'Mar',
        'date_range' => 'March 29-31',
        'description' => 'Yard sale dengan diskon hingga 90%.',
        'bg_color' => 'from-blue-600 to-indigo-700',
        'badge' => 'Sale',
        'badge_color' => 'green',
        'button' => ['text' => 'Lihat Produk', 'url' => '/events/yard-sale']
    ]
];
@endphp

<x-events type="upcoming" :events="$upcomingEvents" />
```

### Workshop Events

```blade
@php
$workshopEvents = [
    [
        'title' => 'Web Development Bootcamp',
        'location' => 'Online',
        'date' => '15-17',
        'month' => 'Jul',
        'date_range' => 'July 15-17',
        'description' => 'Intensive 3-day bootcamp untuk mempelajari web development dari nol.',
        'bg_color' => 'from-green-500 to-teal-600',
        'badge' => 'Limited',
        'badge_color' => 'yellow',
        'button' => ['text' => 'Daftar Sekarang', 'url' => '/workshop/web-dev']
    ]
];
@endphp

<x-events
    type="upcoming"
    :events="$workshopEvents"
    title="Workshop Mendatang"
    subtitle="Tingkatkan skill Anda dengan workshop berkualitas" />
```

### Small Events Grid

```blade
<x-events
    type="grid"
    :events="$smallEvents"
    columns="grid-cols-1 md:grid-cols-2" />
```

### Event Categories with Different Styling

```blade
@php
$categorizedEvents = [
    // Tech Events
    [
        'title' => 'Tech Conference 2024',
        'bg_color' => 'from-blue-600 to-cyan-600',
        'badge' => 'Tech',
        'badge_color' => 'blue',
        // ... other properties
    ],
    // Music Events
    [
        'title' => 'Music Festival',
        'bg_color' => 'from-purple-600 to-pink-600',
        'badge' => 'Music',
        'badge_color' => 'purple',
        // ... other properties
    ],
    // Sale Events
    [
        'title' => 'Mega Sale Event',
        'bg_color' => 'from-red-600 to-orange-600',
        'badge' => 'Sale',
        'badge_color' => 'red',
        // ... other properties
    ]
];
@endphp

<x-events type="upcoming" :events="$categorizedEvents" />
```

## Styling Customization

### Background Colors

```php
'bg_color' => 'from-indigo-500 via-purple-500 to-pink-500'
'bg_color' => 'from-gray-900 to-black'
'bg_color' => 'from-emerald-400 to-cyan-400'
```

### Badge Colors

```php
'badge_color' => 'red'     // bg-red-600
'badge_color' => 'blue'    // bg-blue-600
'badge_color' => 'green'   // bg-green-600
'badge_color' => 'purple'  // bg-purple-600
```

### Grid Layouts

```blade
columns="grid-cols-1"                          <!-- Single column -->
columns="grid-cols-1 md:grid-cols-2"          <!-- 1 col mobile, 2 desktop -->
columns="grid-cols-1 md:grid-cols-2 lg:grid-cols-3"  <!-- Responsive 3 columns -->
columns="grid-cols-1 md:grid-cols-3 lg:grid-cols-4"  <!-- 4 columns large -->
```

## Browser Support

-   Modern browsers with CSS Grid and Flexbox
-   Mobile responsive design
-   Smooth hover animations
-   Touch-friendly for mobile devices
-   Optimized images with object-fit support
