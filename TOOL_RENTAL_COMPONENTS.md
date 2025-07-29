# Tool Rental Components Documentation

## Overview

Komponen Tool Rental menampilkan grid card dengan overlay dan animasi hover yang elegan. Komponen ini dibuat modular dan responsive untuk menampilkan berbagai alat yang tersedia untuk disewa.

## File Structure

```
resources/views/components/tool-rental/
├── tool-rental.blade.php          # Main component
├── grid.blade.php                 # Grid layout
└── common/
    └── card.blade.php             # Individual tool card
```

## Components

### 1. Main Component (`tool-rental.blade.php`)

Komponen utama yang membungkus section tool rental.

**Props:**

-   `title` (string, default: 'Tool Rentals') - Judul section

**Usage:**

```blade
<x-tool-rental title="Tool Rentals" />
```

### 2. Grid Component (`grid.blade.php`)

Menampilkan grid layout untuk tool cards dengan data default atau custom.

**Props:**

-   `tools` (array, optional) - Array data tools, jika tidak disediakan akan menggunakan data default

**Default Data Structure:**

```php
[
    [
        'image' => 'URL gambar',
        'category' => 'Kategori alat',
        'title' => 'Nama alat',
        'description' => 'Deskripsi alat'
    ],
    // Total 5 items: 2 untuk kartu besar atas, 3 untuk kartu kecil bawah
]
```

**Layout Structure:**

-   **Top Row:** 2 kartu besar dengan aspect ratio 16:9
-   **Bottom Row:** 3 kartu normal dengan aspect ratio 4:3

**Usage:**

```blade
<x-tool-rental.grid />

<!-- With custom data -->
<x-tool-rental.grid :tools="$customTools" />
```

### 3. Card Component (`common/card.blade.php`)

Kartu individual untuk setiap tool dengan overlay dan hover effects.

**Props:**

-   `image` (string, required) - URL gambar tool
-   `category` (string, required) - Kategori tool
-   `title` (string, required) - Nama tool
-   `description` (string, required) - Deskripsi tool
-   `size` (string, default: 'normal') - Ukuran kartu ('large' atau 'normal')

**Size Variants:**

-   **Large:** aspect-[16/9], padding p-8, title text-2xl
-   **Normal:** aspect-[4/3], padding p-6, title text-xl

**Features:**

-   **Responsive Design:** Berbeda tampilan antara mobile dan desktop
-   **Hover Effects:** Scale, shadow, dan ring effect saat hover
-   **Overlay Animation:** Smooth transition untuk overlay content
-   **Mobile Friendly:** Content selalu visible di mobile, hover effect di desktop

**Usage:**

```blade
<x-tool-rental.common.card
    image="https://example.com/image.jpg"
    category="Audio Visual"
    title="Stage and Audio Visual Equipment"
    description="Professional sound and lighting equipment for events"
    size="large"
/>
```

## Styling Features

### Hover Animations

-   **Card Scale:** Transform scale-105 on hover
-   **Image Zoom:** Scale-110 untuk background image
-   **Shadow Effect:** Hover shadow-2xl
-   **Ring Effect:** Blue ring border on hover

### Overlay System

-   **Gradient Background:** Black gradient dari bottom ke top
-   **Content Animation:**
    -   Mobile: Content selalu visible
    -   Desktop: Content muncul dengan slide up animation saat hover
-   **Dual Title Display:**
    -   Simple title visible by default
    -   Full content (title + category + description) muncul saat hover

### Responsive Behavior

```css
/* Mobile (default) */
- Content overlay selalu visible
- No hover transformations

/* Desktop (md:) */
- Content hidden by default, muncul saat hover
- Hover animations aktif
- Scale dan transform effects
```

## CSS Classes Used

### Layout & Structure

-   **Top Row:** `grid grid-cols-1 lg:grid-cols-2 gap-8` - 2 kartu besar
-   **Bottom Row:** `grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8` - 3 kartu normal
-   **Large Cards:** `aspect-[16/9]` - Wide aspect ratio
-   **Normal Cards:** `aspect-[4/3]` - Standard aspect ratio
-   `relative overflow-hidden` - Container untuk overlay
-   `absolute inset-0` - Full overlay positioning

### Animations & Transitions

-   `transition-all duration-300` - Smooth general transitions
-   `transition-transform duration-500` - Image zoom animation
-   `transition-opacity duration-300` - Fade effects
-   `group-hover:*` - Hover state triggers

### Visual Effects

-   `bg-gradient-to-t from-black/80 via-black/20 to-transparent` - Overlay gradient
-   `transform hover:scale-105` - Card scale effect
-   `group-hover:scale-110` - Image zoom effect
-   `ring-0 ring-blue-500 group-hover:ring-2` - Ring border effect

## Integration Example

### In Home Page

```blade
<!-- Tool Rental Section -->
<section class="bg-white">
    <x-tool-rental title="Tool Rentals" />
</section>
```

### With Custom Data

```blade
@php
$customTools = [
    [
        'image' => asset('images/drill.jpg'),
        'category' => 'Power Tools',
        'title' => 'Professional Drill',
        'description' => 'Heavy-duty drill for construction projects'
    ],
    // ... more tools
];
@endphp

<x-tool-rental.grid :tools="$customTools" />
```

## Design Specifications

### Visual Design

-   **Large Card Aspect Ratio:** 16:9 (wide layout)
-   **Normal Card Aspect Ratio:** 4:3 (standard)
-   **Border Radius:** rounded-xl (0.75rem)
-   **Hover Scale:** 1.05 (5% larger)
-   **Image Zoom:** 1.10 (10% larger)
-   **Overlay Opacity:** 60% default, 80% on hover

### Typography

-   **Large Cards:**
    -   Title: text-2xl font-bold
    -   Padding: p-8 (2rem)
-   **Normal Cards:**
    -   Title: text-xl font-bold
    -   Padding: p-6 (1.5rem)
-   **Category Badge:** text-xs font-semibold, blue background
-   **Description:** text-sm, gray-200 color, line-clamp-2

### Spacing

-   **Grid Gap:** gap-8 (2rem)
-   **Card Padding:** p-6 (1.5rem)
-   **Badge Margin:** mb-3 (0.75rem)
-   **Title Margin:** mb-2 (0.5rem)

## Browser Compatibility

-   Modern browsers with CSS Grid support
-   CSS transforms and transitions
-   Backdrop filters (for future enhancements)

## Performance Notes

-   Smooth 60fps animations dengan GPU acceleration
-   Efficient CSS transitions menggunakan transform properties
-   Optimized image loading dengan proper sizing
-   Minimal DOM manipulation
