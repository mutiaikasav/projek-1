<template>
    <admin-layout>
        <div>
            <!-- breadcrumbs -->
            <nav class="flex" aria-label="Breadcrumbs">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            <div class="text-gray-700 ml-1 md:ml-2 text font-medium">
                                Company
                            </div>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- breadcrumb header -->
            <div class="text-3x1 font-bold mt-2 mb-2">
                Company
            </div>

            <!-- search, select option pagination, create -->
            <div class="flex flex-row flex-wrap space-x-0 lg:space-x-2 mb-2">
                <div class="w-full lg:w-64 mb-2 lg:mb-0">
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <div class="text-gray-500 sm:text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </div>

                        <!-- search -->
                        <input type="text" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"/>

                        <!-- option pagination -->
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <select name="" id="" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                <option value="">5</option>
                                <option value="">10</option>
                                <option value="">50</option>
                                <option value="">100</option>
                                <option value="">500</option>
                                <option value="">1000</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <jet-button class="w-full lg:w-auto text-center mb-2 lg:mb-0">
                    Create
                </jet-button>
            </div>
        </div>

        <!-- data list -->
        <div v-for="(c, index) in company.data" :key="index">

            <div class="bg-white">
                <div class="pt-2">
                    
                    <!-- Product info -->
                    <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-2 lg:pb-24 lg:px-2 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-2">
                    <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">{{ c.name }}</h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:mt-0 lg:row-span-3">
                        <h2 class="sr-only">Product information</h2>
                        <p class="text-3xl text-gray-900">{{ c.initial }}</p>

                        <!-- Reviews -->
                        <div class="mt-6">
                        <h3 class="sr-only">Reviews</h3>
                            <div class="flex flex-col">
                                <div class="flex items-center mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <p class="ml-3 text-sm font-medium">{{ c.province }} - {{ c.city }} ({{ c.postal_code }})</p>
                                </div>
                                <div class="flex items-center mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                    <p class="ml-3 text-sm font-medium">{{ c.web }}</p>
                                </div>
                                <div class="flex items-center mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                    </svg>
                                    <p class="ml-3 text-sm font-medium">{{ c.email }}</p>
                                </div>
                                <div class="flex items-center mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <p class="ml-3 text-sm font-medium">{{ c.phone }}</p>
                                </div>
                                <div class="flex items-center mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                    </svg>
                                    <p class="ml-3 text-sm font-medium">{{ c.fax }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10">
                            <button type="submit" class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit</button>
                        </div>
                    </div>

                    <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Description</h3>

                            <div class="space-y-6">
                                <p class="text-base text-gray-900">{{ c.description }}</p>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h2 class="text-sm font-medium text-gray-900">Address</h2>

                            <div class="mt-4 space-y-6">
                                <p class="text-sm text-gray-600">{{ c.address }}</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="bg-white px-3 py-1 flex items-center justify-between border-t border-gray-200 sm:px-3">
            <!-- button -->
            <div class="flex flex-1 justify-between sm:hidden">
                <Button class="btn-pagination" :disabled="company.current_page<=1" @click.prevent="paginate(company.current_page-1)">
                    Previous
                </Button>
                <Button class="btn-pagination" :disabled="company.current_page>=company.last_page" @click.prevent="paginate(company.current_page+1)">
                    Next
                </Button>
            </div>

            <!-- information -->
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm leading-5 text-gray-700">
                        Showing
                        <span class="font-medium">
                            {{ company.from }}
                        </span>
                        to
                        <span class="font-medium">
                            {{ company.to }}
                        </span>
                        of
                        <span class="font-medium">
                            {{ company.total }}
                        </span>
                        results
                    </p>
                </div>

                <!-- Show Pagination -->
                <pagination
                    :current_page="current_page"
                    :total="company.total"
                    :per_page="company.per_page"
                    :last_page="company.last_page"
                    :from="company.from"
                    :to="company.to"
                    @paginate="paginate"
                    :offset="4"
                >
                </pagination>
            </div>
        </div>
    </admin-layout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import AdminLayout from "@/Layouts/AdminLayout";
import JetButton from "@/Jetstream/Button.vue";
import Pagination from "@/Components/Pagination";
import Button from "../../../Jetstream/Button.vue";

export default {
    created() {
        document.title = "Company";
    },
    components: {
        Link,
        AdminLayout,
        JetButton,
        Pagination,
        Button
    },
    props: {
        filters: Object,
        company: Object
    },
    data() {
        return {
            current_page: this.company.current_page,
            form: {
                search: this.filters.search,
                per_page: this.company.per_page,
                page: this.filters.page,
                sort_by: this.filters.sort_by,
                sort_dir: this.filters.sort_dir ?? "asc"
            }
        }
    },
    watch: {
        form: {
            handler: _.throttle(function () {
                let query = _.pickBy(this.form);
                this.$inertia.get(
                    this.route("company"),
                    Object.keys(query).length ? query : { remember : "forget"},
                    { preserveState : true }
                );
            }, 300),
            deep: true
        },
        company(company) {
            this.current_page = company.current_page;
        }
    },
    methods: {
        reset(){
            this.form = _.mapValues(this.form, () => null);
        },
        paginate(page){
            this.form.page = page;
        }
    }
}
</script>