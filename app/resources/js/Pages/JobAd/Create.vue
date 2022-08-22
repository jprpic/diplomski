<script setup>
import AuthOrg from '@/Layouts/AuthOrg.vue';
import SearchBox from "@/Components/JobAd/SearchBox";
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthOrg>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Job Ad
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Error -->
                        <div v-if="Object.keys(this.validErrors).length !== 0" class="p-4 mb-4 text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                            <span v-for="error in validErrors" class="font-medium">{{ error }}</span>
                        </div>
                        <!-- Success Flash -->
                        <div v-if="this.successFlash" class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                            <span class="font-medium">{{ successFlash }}</span>
                        </div>
                        <SearchBox :postcodes = "postcodes"></SearchBox>
                    </div>
                </div>
            </div>
        </div>
    </AuthOrg>
</template>

<script>
import { toRaw } from 'vue';
import {usePage} from "@inertiajs/inertia-vue3";

export default {
    name: "JobAdCreate.vue",
    props:{
        postcodes: {
            required: true
        },
    },
    computed:{
        successFlash(){
            return toRaw(usePage().props.value.flash.status)
        },
        validErrors(){
            return toRaw(usePage().props.value.errors);
        }
    },
    beforeCreate() {
        if(this.$store.getters.job === null){
            this.$store.dispatch('refreshJobAd');
        }
    }
}
</script>
