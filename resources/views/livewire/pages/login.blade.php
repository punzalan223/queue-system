<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.app-landing')] 
class extends Component {

}; ?>

<div>
    <div class="">
        <div class="grid grid-cols-2 gap-6 max-w-6xl mx-auto">
            <div>
                <div class="py-12 px-16 bg-gray-50 rounded-4xl">
                    <h1 class="text-tprimary text-2xl font-raleway mb-2">Welcome to <span class="font-bold font-shippori">Queueket</span></h1>
                    <p class="text-tsecondary font-roboto">A smarter way to manage queues — access your dashboard and serve customers without the wait.</p>
    
                    <div class="mt-12 text-tprimary grid gap-4 font-roboto">
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
                        <label class="border border-gray-300 bg-white flex items-center h-12 rounded-full focus-within:border-gray-500">
                            <div class="px-4 border-r border-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 shrink-0 text-tsecondary">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>
                            </div>
                            <input 
                                type="password"
                                class="w-full mx-4 outline-none"
                                placeholder="Password"
                            >
                        </label>
                    </div>
    
                    <button class="mt-8 font-medium h-12 bg-primary text-white rounded-full cursor-pointer w-full">Sign in</button>
    
                    <div class="relative">
                        <div class="h-px w-full bg-gray-300 mt-8"></div>
                        <span class="text-tsecondary absolute left-1/2 -translate-x-1/2 -top-3.5 bg-gray-50 px-4">or</span>
                    </div>
    
                    <div class="mt-8">
                        <a href="#" class="flex w-full items-center justify-center gap-3 rounded-full h-12 bg-white px-3 py-2 text-sm font-semibold text-tprimary ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus-visible:ring-transparent">
                            <svg viewBox="0 0 24 24" aria-hidden="true" class="h-5 w-5">
                                <path d="M12.0003 4.75C13.7703 4.75 15.3553 5.36002 16.6053 6.54998L20.0303 3.125C17.9502 1.19 15.2353 0 12.0003 0C7.31028 0 3.25527 2.69 1.28027 6.60998L5.27028 9.70498C6.21525 6.86002 8.87028 4.75 12.0003 4.75Z" fill="#EA4335" />
                                <path d="M23.49 12.275C23.49 11.49 23.415 10.73 23.3 10H12V14.51H18.47C18.18 15.99 17.34 17.25 16.08 18.1L19.945 21.1C22.2 19.01 23.49 15.92 23.49 12.275Z" fill="#4285F4" />
                                <path d="M5.26498 14.2949C5.02498 13.5699 4.88501 12.7999 4.88501 11.9999C4.88501 11.1999 5.01998 10.4299 5.26498 9.7049L1.275 6.60986C0.46 8.22986 0 10.0599 0 11.9999C0 13.9399 0.46 15.7699 1.28 17.3899L5.26498 14.2949Z" fill="#FBBC05" />
                                <path d="M12.0004 24.0001C15.2404 24.0001 17.9654 22.935 19.9454 21.095L16.0804 18.095C15.0054 18.82 13.6204 19.245 12.0004 19.245C8.8704 19.245 6.21537 17.135 5.2654 14.29L1.27539 17.385C3.25539 21.31 7.3104 24.0001 12.0004 24.0001Z" fill="#34A853" />
                            </svg>
                            <span class="font-semibold text-tprimary">Continue with Google</span>
                        </a>
                    </div>
                </div>
                <div class="mt-4 py-4 px-8 bg-gray-50 rounded-4xl">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="relative flex">
                                <div class="h-12 w-12 rounded-full bg-yellow-200"></div>
                                <div class="h-12 w-12 rounded-full bg-red-200 relative -left-5"></div>
                                <div class="h-12 w-12 rounded-full bg-green-200 relative -left-10"></div>
                            </div>
                            <div class="relative -left-4">
                                <h6 class="text-sm text-tprimary font-semibold">Join with 20k+ Users</h6>
                                <p class="text-xs text-tsecondary">Let'see our happy customer</p>
                            </div>
                        </div>
                        <div class="rounded-full bg-white h-12 w-12 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-tprimary">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-4xl bg-sky-100"></div>
        </div>
    </div>
</div>