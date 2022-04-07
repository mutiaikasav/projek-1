<template>
    <div class="flex flex-col h-screen">
        <div class="flex flex-1 overflow-hidden">
            <Sidebar :openNav="navOpen"/>

            <div class="flex flex-1 flex-col">
                <div class="flex">
                    <Navbar @toggleNav = "navOpen = !navOpen" />
                </div>

                <div class="overflow-y-auto p-2">
                    <slot></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "@/Layouts/Partials/Navbar";
import Sidebar from "@/Layouts/Partials/Sidebar";

export default {
    components: {
        Navbar,
        Link,
        Sidebar
    },
    data() {
        return{
            // localStorage = save storage->local storage->var navOpen -> true or false (inspect->application)
            navOpen:
                localStorage.getItem("navOpen") === "false" 
                ? false 
                : localStorage.getItem("navOpen") === "true" 
                ? true
                : ""
        };
    },
    watch: {
        navOpen(navOpen) {
            localStorage.navOpen = navOpen;
        }
    },
    computed: {
        path(){
            return window.location.pathname;
        }
    }
}
</script>