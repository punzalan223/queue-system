<?php

use Livewire\Volt\Component;

new class extends Component {
    public array $links = [];

    public function mount() {
        $this->links = [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'About', 'url' => route('queue')],
            ['label' => 'Solution', 'url' => route('queue')],
            ['label' => 'Pricing', 'url' => route('queue')],
            ['label' => 'Customers', 'url' => route('queue')],
            ['label' => 'Contact', 'url' => route('contact')],
        ];
    }
}; ?>

<div>
    <div class="flex justify-between py-4 font-raleway max-w-7xl mx-auto text-sm">
        <div class="flex gap-12">
            <livewire:components.logo />
            <div class="flex items-end gap-6 font-medium text-tsecondary">
                @foreach ($links as $link)
                    <a 
                        href="{{ $link['url'] }}"
                        wire:navigate
                        wire:current.exact="text-primary font-bold"
                        class="hover:text-primary hover:font-bold"
                    >
                        {{$link['label']}}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="flex items-end font-medium">
            <a 
                href="{{ route('login')}}"
                wire:navigate
                wire:current.exact="text-primary! font-bold"
                class="text-tsecondary "
            >
                <div class="hover:text-primary hover:font-bold">
                    Sign In
                </div>
            </a>
        </div>
    </div>
</div>
