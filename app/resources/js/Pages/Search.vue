<script setup>
import SearchBox from "@/Components/Search/SearchBox";
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <component v-bind:is="layout">
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
    </component>
</template>



<script>
import AuthOrg from '@/Layouts/AuthOrg.vue';
import AuthUser from '@/Layouts/AuthUser.vue';
import {usePage} from "@inertiajs/inertia-vue3";
export default {
    name: "Search.vue",
    components:{
        AuthUser, AuthOrg
    },
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
      },
      layout(){
          const role_id = usePage().props.value.auth.user.role_id;
          if(role_id === 1){
            return 'auth-user';
          }else if(role_id === 2){
            return 'auth-org';
        }
      }
    },
    beforeCreate() {
        // Get params from URL and update store search with the object
        const queryString = window.location.search;
        if(queryString){
            const urlParams = new URLSearchParams(queryString);
            const search = {
                minAge: urlParams.get('minAge'),
                maxAge: urlParams.get('maxAge'),
                minExp: urlParams.get('minExp'),
                maxExp: urlParams.get('maxExp'),
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
        else if(this.$store.getters.search === null){
            this.$store.dispatch('refreshSearch');
        }
    },
}
</script>

<style scoped>

</style>
