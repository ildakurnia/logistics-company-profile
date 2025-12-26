<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="relative min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
        <!-- Background Pattern -->
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'30\' height=\'30\' viewBox=\'0 0 30 30\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\' fill=\'rgba(255,255,255,0.03)\'/%3E%3C/svg%3E')] bg-center">
        </div>

        <div class="relative">
            <!-- Navigation -->
            <nav class="flex items-center justify-between p-6 lg:px-8">
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span
                            class="text-2xl font-bold bg-gradient-to-r from-blue-400 via-blue-500 to-purple-600 bg-clip-text text-transparent">
                            {{ config('app.name', 'Laravel') }}
                        </span>
                    </a>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#"
                        class="text-sm font-semibold leading-6 text-gray-300 hover:text-white transition-colors">Services</a>
                    <a href="#"
                        class="text-sm font-semibold leading-6 text-gray-300 hover:text-white transition-colors">About</a>
                    <a href="#"
                        class="text-sm font-semibold leading-6 text-gray-300 hover:text-white transition-colors">Tracking</a>
                    <a href="#"
                        class="text-sm font-semibold leading-6 text-gray-300 hover:text-white transition-colors">Contact</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="#"
                        class="text-sm font-semibold leading-6 text-white bg-gradient-to-r from-blue-500 to-purple-600 px-4 py-2 rounded-lg hover:from-blue-600 hover:to-purple-700 transition-all shadow-lg shadow-blue-500/25">
                        Get Quote <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </nav>

            <!-- Hero Section -->
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:py-40 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl lg:text-7xl">
                        <span class="block">Global Logistics</span>
                        <span
                            class="block bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 bg-clip-text text-transparent mt-2">
                            Solutions
                        </span>
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-gray-300 max-w-2xl mx-auto">
                        Delivering excellence worldwide. Your trusted partner for seamless freight forwarding,
                        warehousing, and supply chain management.
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                            class="rounded-lg bg-gradient-to-r from-blue-500 to-purple-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-500/30 hover:from-blue-600 hover:to-purple-700 transition-all transform hover:scale-105">
                            Get Started
                        </a>
                        <a href="#"
                            class="text-sm font-semibold leading-6 text-gray-300 hover:text-white transition-colors">
                            Learn more <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="mx-auto max-w-7xl px-6 lg:px-8 pb-24">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div
                        class="group relative bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-blue-500/50 transition-all duration-300 hover:transform hover:scale-105">
                        <div
                            class="h-12 w-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-blue-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Freight Forwarding</h3>
                        <p class="text-gray-400 leading-relaxed">Comprehensive air, sea, and land freight solutions
                            tailored to your business needs.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="group relative bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-purple-500/50 transition-all duration-300 hover:transform hover:scale-105">
                        <div
                            class="h-12 w-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-purple-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Warehousing</h3>
                        <p class="text-gray-400 leading-relaxed">State-of-the-art storage facilities with advanced
                            inventory management systems.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="group relative bg-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-pink-500/50 transition-all duration-300 hover:transform hover:scale-105">
                        <div
                            class="h-12 w-12 bg-gradient-to-br from-pink-500 to-orange-600 rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-pink-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Real-time Tracking</h3>
                        <p class="text-gray-400 leading-relaxed">Track your shipments in real-time with our advanced GPS
                            tracking technology.</p>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="border-t border-gray-800">
                <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-gray-400">
                            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
                        </p>
                        <p class="text-sm text-gray-500">
                            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>