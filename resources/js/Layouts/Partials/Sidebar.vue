<template>
    <aside class="flex flex-col w-64 h-screen p-2 bg-gray-800" v-if="openNav">
        <!-- logo -->
        <div class="flex flex-col items-center">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="ml-2 text-2x1 font-mono font-bold text-gray-300">
                    CMS
                </span>
                <span class="ml-1 text-sm font-sans text-gray-200">
                    Management Officer
                </span>
            </div>

            <div class="mt-2 flex items-center">
            </div>

        </div>

        <hr class="border-gray-600 mt-2">

        <div class="overflow-auto h-screen flex flex-col justify-between flex-1 mt-1">
            <nav>
                <!-- dashboard -->
                <div class="nav-item mb-1 flex items-center px-2 py-1 text-white rounded-md transition-color duration-200 tranform hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>

                    <span class="ml-2 font-medium">
                        Dashboard
                    </span>
                </div>

                <!-- admin -->
                <div class="items-center mt-2 text-white mx-2 font-medium">
                    <span class="font-bold">
                        Admins
                    </span>
                </div>

                <!-- user -->
                <div class="nav-item mb-1 flex items-center px-2 py-1 text-white rounded-md transition-color duration-200 tranform hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>

                    <span class="ml-2 font-medium">
                        User
                    </span>
                </div>

                <!-- Roles -->
                <div class="nav-item mb-1 flex items-center px-2 py-1 text-white rounded-md transition-color duration-200 tranform hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>

                    <span class="ml-2 font-medium">
                        Roles
                    </span>
                </div>

                <!-- Permission -->
                <div class="nav-item mb-1 flex items-center px-2 py-1 text-white rounded-md transition-color duration-200 tranform hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>

                    <span class="ml-2 font-medium">
                        Permission
                    </span>
                </div>

                <!-- Company -->
                <div class="nav-item mb-1 flex items-center px-2 py-1 text-white rounded-md transition-color duration-200 tranform hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>

                    <span class="ml-2 font-medium">
                        Company
                    </span>
                </div>
            </nav>
        </div>
    </aside>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link
    }, 
    props: ["openNav"]
}
</script>