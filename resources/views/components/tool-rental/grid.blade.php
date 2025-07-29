@props([
    'tools' => [
        [
            'image' => 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?q=80&w=1000',
            'category' => 'Audio Visual',
            'title' => 'Stage and Audio Visual Equipment',
            'description' => 'Professional sound and lighting equipment for events, concerts, and presentations'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=1000',
            'category' => 'Furniture',
            'title' => 'Decor and Furniture',
            'description' => 'Elegant furniture and decorative items for weddings, parties, and corporate events'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=1000',
            'category' => 'Exhibition',
            'title' => 'Booths & Exhibition Equipment',
            'description' => 'Complete booth setup and exhibition materials for trade shows and displays'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1601758228041-f3b2795255f1?q=80&w=1000',
            'category' => 'Logistics',
            'title' => 'Transportation & Logistics',
            'description' => 'Reliable transportation and logistics solutions for your event needs'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=1000',
            'category' => 'Catering',
            'title' => 'Catering & Food Equipment',
            'description' => 'Professional kitchen equipment and catering supplies for any occasion'
        ]
    ]
])

<div class="space-y-8">
    <!-- Top Row - 2 Large Cards -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        @foreach(array_slice($tools, 0, 2) as $tool)
            <x-tool-rental.common.card
                :image="$tool['image']"
                :category="$tool['category']"
                :title="$tool['title']"
                :description="$tool['description']"
                size="large"
            />
        @endforeach
    </div>

    <!-- Bottom Row - 3 Smaller Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach(array_slice($tools, 2) as $tool)
            <x-tool-rental.common.card
                :image="$tool['image']"
                :category="$tool['category']"
                :title="$tool['title']"
                :description="$tool['description']"
                size="normal"
            />
        @endforeach
    </div>
</div>
