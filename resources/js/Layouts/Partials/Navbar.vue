<template>
    <nav class="w-full bg-gray-700 drop-shadow-xl">
        <div class="grid grid-cols-2 py-1 px-2">
            <div class="col-start-1 flex flex-wrap content-center">
                <button type="button" class="text-gray-200 hover:text-gray-500" aria-label="toggle menu"
                    @click="$emit('toggleNav')"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <div class="col-end-12">
                <div>
                    <account-dropdown></account-dropdown>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
import AccountDropdown from "./AccountDropdown";

export default {
    components: {
        AccountDropdown
    }
}
</script>
