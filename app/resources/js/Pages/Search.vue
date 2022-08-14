<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import SearchBox from "@/Components/Search/SearchBox";
import SearchItem from "@/Components/Search/SearchItem";
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Search
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <SearchBox :targets = "targets" :postcodes = "postcodes"></SearchBox>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>



<script>
export default {
    name: "Search.vue",
    props: {
        targets:{
            type: Object,
            required: false
        },
        postcodes:{
            required: true
        }
    },
    computed:{
      search(){
          return this.$store.getters.search;
      }
    },
    beforeCreate() {
        // Get params from URL and update store search with the object
        const queryString = window.location.search;
        if(queryString){
            const urlParams = new URLSearchParams(queryString);
            const search = {
                ageRange:{
                    bot: urlParams.get('ageRange[bot]'),
                    top: urlParams.get('ageRange[top]')
                },
                expRange: {
                    bot: urlParams.get('expRange[bot]'),
                    top: urlParams.get('expRange[top]')
                },
                skills: urlParams.getAll('skills[]').map( skill => { return Number(skill); }),
            }
            // Optional params
            if(urlParams.has('county')){
                search.county = urlParams.get('county');
            }
            if(urlParams.has('city')){
                search.city = urlParams.get('city');
            }
            this.$store.dispatch('setSearch', search);
        }
    },
}
</script>

<style scoped>

</style>
