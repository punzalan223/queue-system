<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="w-full h-full">
        <div class="w-full">
            <nav 
                x-data="{ scrolled: false }" 
                x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 0 })"
                :class="scrolled ? 'border-b' : 'border-b-0'"
                class="bg-white sticky top-0 z-20 border-neutral-300 transition-all"
            >
                <livewire:components.frontend.navbar />
            </nav>
            <main class="mt-16">
                {{ $slot }}
            </main>
            <livewire:components.footer />
        </div>
    </body>
</html>
