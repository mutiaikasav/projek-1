<template>
    <nav class="relative z-0 inline-flex">
        <!-- Page 0 -->
        <a href="#" v-if="current_page > 1 " class="relative inline-flex items-center p-1 rounded bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:ring-blue active:bg-gray-100 active:text-gray-500 transition ease in-out duration-150"
            aria-label="Previous" @click.prevent="change(0)">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
            </svg>
        </a>

        <!-- Prev Page -->
        <a href="#" v-if="current_page > 1 " class="relative inline-flex items-center p-1 rounded bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:ring-blue active:bg-gray-100 active:text-gray-500 transition ease in-out duration-150"
            aria-label="Previous" @click.prevent="change(current_page-1)">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </a>

        <!-- Current Page -->
        <a href="#" v-for="page in pages" 
            :key="page" 
            class="relative inline-flex items-center px-3 py-1 rounded bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:ring-blue active:bg-gray-100 active:text-gray-500 transition ease in-out duration-150"
            :class="page==current_page ?  'bg-blue-500 text-white' : 'bg-white text-gray-700 hover:text-gray-500'"
            @click.stop="change(page)">
            {{ page }}
        </a>

        <!-- Next Page -->
        <a href="#" v-if="current_page < last_page " class="relative inline-flex items-center p-1 rounded bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:ring-blue active:bg-gray-100 active:text-gray-500 transition ease in-out duration-150"
            aria-label="Previous" @click.prevent="change(current_page+1)">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </a>
        
        <!-- Last Page -->
        <a href="#" v-if="current_page < last_page " class="relative inline-flex items-center p-1 rounded bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:ring-blue active:bg-gray-100 active:text-gray-500 transition ease in-out duration-150"
            aria-label="Previous" @click.prevent="change(last_page)">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
        </a>
    </nav>    
</template>
<script>
export default {
    props: {
        current_page : {
            type: Number
        },
        total: {
            type: Number
        },
        per_page: {

        },
        last_page: {
            type: Number
        },
        from : {
            type: Number
        },
        to : {
            type: Number
        },
        offset : {
            type: Number,
            default: 4
        },
        disabled : {
            type: Boolean,
            default: false
        }
    }
}
</script>