<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import SearchInput from "@/Components/Search/SearchBox";
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
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <SearchInput></SearchInput>
                        <div v-for="target in targets">
                            <SearchItem :target="target"></SearchItem>
                        </div>
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
        }
    },
    computed:{
      search(){
          return this.$store.getters.search;
      }
    },
    beforeCreate() {
        if(this.search === null){
            this.$store.dispatch('restartSearch');
            console.log(this.search)
        }
    }
}
</script>

<style scoped>

</style>
