<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.app-landing')] 
class extends Component {
    public array $companies = [];

    public function mount() {
        $this->companies = [
            ['name' => 'Tinder', 'logo_url' => 'https://via.placeholder.com/100x40?text=Tinder', 'alt' => 'Tinder'],
            ['name' => 'Portola', 'logo_url' => 'https://via.placeholder.com/100x40?text=Portola', 'alt' => 'Portola'],
            ['name' => 'HeyGen', 'logo_url' => 'https://via.placeholder.com/100x40?text=HeyGen', 'alt' => 'HeyGen'],
            ['name' => 'Eleven Labs', 'logo_url' => 'https://via.placeholder.com/100x40?text=ElevenLabs', 'alt' => 'Eleven Labs'],
            ['name' => 'Oracle', 'logo_url' => 'https://via.placeholder.com/100x40?text=Oracle', 'alt' => 'Oracle'],
        ];
    }
}; ?>

<div>
    {{-- Hero Section --}}
    <div class="relative pb-32">
        <div
            class="absolute inset-0 z-0"
            style="
                background-image:
                    linear-gradient(to right, #e7e5e4 1px, transparent 1px),
                    linear-gradient(to bottom, #e7e5e4 1px, transparent 1px);
                background-size: 20px 20px;
                background-position: 0 0, 0 0;
                -webkit-mask-image:
                    repeating-linear-gradient(to right, black 0px, black 3px, transparent 3px, transparent 8px),
                    repeating-linear-gradient(to bottom, black 0px, black 3px, transparent 3px, transparent 8px),
                    radial-gradient(ellipse 100% 80% at 50% 100%, #000 50%, transparent 90%);
                -webkit-mask-composite: source-in;
                mask-image:
                    repeating-linear-gradient(to right, black 0px, black 3px, transparent 3px, transparent 8px),
                    repeating-linear-gradient(to bottom, black 0px, black 3px, transparent 3px, transparent 8px),
                    radial-gradient(ellipse 100% 80% at 50% 100%, #000 50%, transparent 90%);
                mask-composite: intersect;
            "
        ></div>
        <div class="relative max-w-7xl mx-auto">
            <div class="font-raleway z-10">
                <div class="border border-neutral-400 inline-block text-sm px-4 py-1 rounded-full mb-4 font-medium text-tprimary">
                    Live Queueing System
                </div>
                <div class="text-5xl font-medium">
                    <span class="block">
                        Manage Queues that can
                    </span>
                    <span>
                        <span class="text-emerald-500">track</span>, 
                        <span class="text-cyan-500">notify</span>, and 
                        <span class="text-amber-500">serve</span>
                    </span>
                </div>
                <div class="mt-4 text-xl max-w-lg text-tsecondary">
                    Smart, simple, and reliable queue management for businesses of any size.
                </div>
                <div class="mt-8 flex gap-4 select-none">
                    <a>
                        <div class="font-medium px-6 py-3 bg-primary text-white rounded-sm cursor-pointer">
                            Get Started
                        </div>
                    </a>
                    <a>
                        <div class="font-medium px-6 py-3 border border-neutral-400 text-tprimary rounded-sm cursor-pointer bg-white">
                            See It in Action
                        </div>
                    </a>
                </div>
                <div class="mt-6 flex flex-col text-tprimary font-roboto text-sm">
                    <div class="flex items-center gap-2">
                        <span class="text-xl">⚡</span>
                        <span>Setup in minutes, no training required</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-xl">🚀</span>
                        <span>Keep your queues moving smoothly and efficiently</span>
                    </div>
                </div>
            </div>
            <div class="z-10 absolute top-0 right-3 w-1/2 perspective-[1000px]">
                <img 
                    src="{{ asset('img/queue.jfif') }}" 
                    class="w-full h-auto rounded-lg shadow-2xl transform -rotate-y-20 rotate-x-2 transition-transform duration-500 hover:rotate-y-0 hover:rotate-x-0 hover:scale-105"
                >
            </div>
        </div>
    </div>

    {{-- Trusted Companies Section --}}
    <div class="w-full border-b border-gray-300 lg:border-t">
        <div class="max-w-7xl mx-auto grid grid-cols-2 lg:grid-cols-6 items-center">
            <div class="flex h-20 items-center justify-center lg:justify-start border-r border-t border-gray-300 lg:border-l lg:border-t-0 px-4">
                <span class="text-sm font-semibold text-tprimary">
                    Trusted by companies shaping the future in customer experience
                </span>
            </div>
            @foreach ($companies as $company)           
                <div class="flex h-20 items-center justify-center border-t border-gray-300 lg:border-t-0 lg:border-r">
                    <img src="{{ $company['logo_url'] }}" alt="{{ $company['alt'] }}" class="h-6 w-auto">
                </div>
            @endforeach
        </div>
    </div>

    <div class="pt-28 border-l border-r border-neutral-300 max-w-7xl mx-auto">
        {{-- Features Section --}}
        <div 
            class="px-10"
            x-data="{
                selectedFeature: 1,
                tabs: ['Queue Management', 'Notifications', 'Live Display', 'Analytics']
            }"
        >
            <div class="flex gap-6 text-tprimary font-raleway">
                <template x-for="(tab, index) in tabs" :key="index">
                    <div 
                        x-on:click="selectedFeature = index + 1" 
                        :class="selectedFeature === index + 1 ? 'font-bold' : ''"
                        class="cursor-pointer"
                        x-text="tab"
                    ></div>
                </template>
            </div>
            <div class="border border-gray-300 rounded-lg mt-2 w-full p-6 grid grid-cols-2">
                <div x-show="selectedFeature === 1">
                    <div class="max-w-md text-tprimary font-semibold">
                        QueueKet helps businesses manage queues effortlessly, for both self-serve and staff-assisted customers.
                    </div>
                    <div 
                        class="mt-4 space-y-1">
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                            <span>Real-time updates keep everyone in sync</span>
                        </div>
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                            </svg>
                            <span>Manage multiple counters without losing track.</span>
                        </div>
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                            </svg>
                            <span>Record essential customer information easily</span>
                        </div>
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
                            </svg>
                            <span>Works smoothly on any device—phones, tablets, or desktops</span>
                        </div>
                    </div>
                </div>
                <div x-show="selectedFeature === 2">
                    <div class="max-w-md text-tprimary font-semibold">
                        Send optional SMS, email, or voice alerts to customers, so they can be notified if the queue is long and take a break without losing their spot.
                    </div>
                    <div class="mt-4 space-y-1">
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span>SMS Notifications</span>
                        </div>
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <span>Email notifications</span>
                        </div>
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                            </svg>
                            <span>Optional voice alerts</span>
                        </div>
                    </div>
                </div>
                <div x-show="selectedFeature === 3">
                    <div class="max-w-md text-tprimary font-semibold">
                        Real-time dashboard on TV or monitor to track queue status and customer flow.
                    </div>
                    <div class="mt-4 space-y-1">
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>
                            <span>TV/monitor dashboard</span>
                        </div>
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                            </svg>
                            <span>Multi-counter tracking</span>
                        </div>
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                            </svg>
                            <span>Easy to read visuals</span>
                        </div>
                    </div>
                </div>
                <div x-show="selectedFeature === 4">
                    <div class="max-w-md text-tprimary font-semibold">
                        Daily, weekly, and monthly reports to optimize queue flow and improve service efficiency.
                    </div>
                    <div class="mt-4 space-y-1">
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>
                            <span>Detailed daily reports</span>
                        </div>
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                            </svg>
                            <span>Weekly & monthly summaries</span>
                        </div>
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg>
                            <span>Counter performance insights</span>
                        </div>
                        <div class="flex text-tsecondary gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                            <span>Queue flow optimization</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="px-10 mt-28 bg-neutral-50">
            <div class="h-px w-full bg-neutral-300 absolute left-0"></div>
            <div class="py-28">
                <div class="font-raleway">
                    <h1 class="text-xl font-semibold text-tprimary text-center">
                        Everything You Need for Modern Queueing
                    </h1>
                    <p class="text-lg text-tsecondary text-center">
                        Make waiting easier for customers and managing easier for your team
                    </p>
                </div>
                <div class="flex gap-4 mt-6 font-roboto">
                    <!-- 60% -->
                    <div class="border border-gray-300 rounded-lg w-[60%] p-6 bg-white">
                        <img 
                            src="https://picsum.photos/800/400?random=1"
                            class="w-full rounded-md mb-4"
                            alt="Queue image"
                        >
        
                        <h2 class="font-bold mb-2">
                            Make Queues Faster & Stress-Free
                        </h2>
        
                        <p class="text-gray-600 mb-3">
                            Queueket digitizes the queuing experience so customers can join using 
                            QR codes, kiosks, or with help from staff — perfect for offices, clinics, and retail.
                        </p>
        
                        <ul class="text-gray-700 space-y-1">
                            <li>• Reduce long lines and waiting frustration</li>
                            <li>• Improve service flow with smart routing</li>
                            <li>• Customers get updates without crowding</li>
                        </ul>
                    </div>
        
                    <!-- 40% -->
                    <div class="border border-gray-300 rounded-lg w-[40%] p-10 bg-white">
                        <img 
                            src="https://picsum.photos/600/400?random=2"
                            class="w-full rounded-md mb-4"
                            alt="Notifications"
                        >
        
                        <h2 class="font-bold mb-2">Smart Notifications</h2>
                        <p class="text-gray-600">
                            Optional SMS, email, or voice alerts notify customers when their turn 
                            is near — perfect when lines are long so they can step away without missing their spot.
                        </p>
                    </div>
                </div>
                <!-- Bottom 3 cards -->
                <div class="grid grid-cols-3 mt-6 gap-4 font-roboto">
        
                    <div class="border border-gray-300 rounded-lg p-10 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>
                        <h3 class="font-semibold mb-1">Multiple Ways to Join</h3>
                        <p class="text-gray-600">QR code, kiosk, mobile device, or assisted by staff.</p>
                    </div>
        
                    <div class="border border-gray-300 rounded-lg p-10 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
                        </svg>
                        <h3 class="font-semibold mb-1">Seamless Counter Flow</h3>
                        <p class="text-gray-600">Move customers across counters smoothly without confusion.</p>
                    </div>
        
                    <div class="border border-gray-300 rounded-lg p-10 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                        </svg>
                        <h3 class="font-semibold mb-1">Real-Time Monitoring</h3>
                        <p class="text-gray-600">Managers can track queue length, wait time, and activity instantly.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-10 bg-neutral-50">
            <div class="h-px w-full bg-neutral-300 absolute left-0"></div>
        </div>
    </div>

    <div class="relative bg-tprimary overflow-hidden">
        <div class="relative top-0 z-10 mx-auto mt-0 flex h-16 max-w-[min(700px,calc(100vw-2rem))] -translate-y-px items-start justify-center text-gray-50"><svg viewBox="0 0 85 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-full w-auto shrink-0 translate-x-px translate-y-px overflow-visible"><rect x="0" y="0" width="85" height="1" fill="currentColor" transform="translate(0, -1)"></rect><path d="M50 45C57.3095 56.6952 71.2084 63.9997 85 64V0H0C13.7915 0 26.6905 7.30481 34 19L50 45Z" fill="currentColor"></path></svg><div class="border-t relative z-10 h-[calc(100%+1px)] min-w-0 grow border-gray-50 bg-gray-50"></div><svg viewBox="0 0 85 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-full w-auto shrink-0 -translate-x-px translate-y-px -scale-x-100 overflow-visible"><rect x="0" y="0" width="85" height="1" fill="currentColor" transform="translate(0, -1)"></rect><path d="M50 45C57.3095 56.6952 71.2084 63.9997 85 64V0H0C13.7915 0 26.6905 7.30481 34 19L50 45Z" fill="currentColor"></path></svg></div>
        <div class="absolute inset-0 z-0 pointer-events-none">
            {{-- Cyan glow --}}
            <div class="absolute top-[60%] left-1/2 w-[40%] h-[40%] -translate-x-1/2 -translate-y-1/2 rounded-full"
                style="
                    background: radial-gradient(circle at center, rgba(6, 182, 212, 0.25) 0%, rgba(0, 0, 0, 0) 80%);
                    filter: blur(100px);
                    opacity: 0.6;
                ">
            </div>
        </div>
        {{-- Content --}}
        <div class="text-center z-10 max-w-xl mx-auto space-y-6 py-28 font-raleway">
            <p class="text-neutral-200 text-4xl">
                Join <span class="text-neutral-100 font-bold">Queueket</span> now and manage your queues effortlessly!
            </p>

            <div class="flex gap-4 justify-center mt-16">
                <a>
                    <div class="font-medium px-6 py-3 bg-white text-tprimary rounded-sm cursor-pointer">
                        Get Started
                    </div>
                </a>
                <a>
                    <div class="font-medium px-6 py-3 border border-neutral-400 text-white rounded-sm cursor-pointer">
                        See It in Action
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
