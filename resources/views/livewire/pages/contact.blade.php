<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.app-landing')] 
class extends Component {

}; ?>

<div>
    <div class="mx-auto max-w-5xl">
        <div class="flex mx-auto gap-8">
            <div class="w-full max-w-sm">
                <div class="flex items-start gap-4">
                    <div class="relative top-1 border border-gray-300 inline-flex items-center justify-center p-2 self-start rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="size-6 shrink-0 text-tsecondary">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </div>

                    <div>
                        <h5 class="font-semibold font-raleway text-lg text-tprimary">Chat to us</h5>
                        <p class="font-roboto text-tsecondary">Our friendly team is here to help</p>
                        <p class="text-tprimary font-semibold mt-2">queueket@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 mt-8">
                    <div class="relative top-1 border border-gray-300 inline-flex items-center justify-center p-2 self-start rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 shrink-0 text-tsecondary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                    </div>

                    <div>
                        <h5 class="font-semibold font-raleway text-lg text-tprimary">Visit us</h5>
                        <p class="font-roboto text-tsecondary">Come say hello at our office HQ.</p>
                        <p class="text-tprimary font-semibold mt-2">xxx Smith Street</p>
                        <p class="text-tprimary font-semibold">xxx Colling Wood VIC Batasan</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 mt-8">
                    <div class="relative top-1 border border-gray-300 inline-flex items-center justify-center p-2 self-start rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 shrink-0 text-tsecondary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                        </svg>
                    </div>

                    <div>
                        <h5 class="font-semibold font-raleway text-lg text-tprimary">Call us</h5>
                        <p class="font-roboto text-tsecondary">Mon - Fri 8am to 5pm.</p>
                        <p class="text-tprimary font-semibold mt-2">+1 (555) 000-000</p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-gray-50 flex-1 rounded-4xl p-12">
                <h1 class="text-tprimary font-semibold text-4xl">Interested in Queueket?</h1>
                <p class="mt-4 text-tsecondary">Send us a message and let’s see how we can help.</p>
                <div class="mt-8 text-tprimary grid gap-4 font-roboto">
                    <label class="border border-gray-300 bg-white flex items-center h-12 rounded-full focus-within:border-gray-500">
                        <div class="px-4 border-r border-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 shrink-0 text-tsecondary">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <input 
                            type="text"
                            class="w-full mx-4 outline-none"
                            placeholder="Full Name"
                        >
                    </label>
                    <label class="border border-gray-300 bg-white flex items-center h-12 rounded-full focus-within:border-gray-500">
                        <div class="px-4 border-r border-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 shrink-0 text-tsecondary">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <input 
                            type="email"
                            class="w-full mx-4 outline-none"
                            placeholder="Email"
                        >
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>