<script setup>
import AuthOrg from '@/Layouts/AuthOrg.vue';
import JobAd from '@/Components/JobAd/Item.vue';
import { Link } from '@inertiajs/inertia-vue3'
</script>

<template>
    <AuthOrg>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <p class="mb-4 text-2xl font-bold">
                            Your Job Ads
                        </p>
                        <div v-if="!jobAds.length" id="alert-5" class="flex p-4 bg-gray-100 rounded-lg dark:bg-gray-700" role="alert">
                            <div class="ml-3 font-medium text-gray-700 dark:text-gray-300">
                                <p>There seems nothing to be here!
                                You can start out by <Link href='/job-ad/create' class="font-semibold underline">Creating a Job Ad</Link>!</p>
                            </div>
                        </div>
                        <div v-else>
                            <div v-for="ad in jobAds" :key="ad.id">
                                <button class="w-full" type="button" @click="showAd(ad.id)">
                                    <JobAd :jobAd="ad"></JobAd>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </AuthOrg>
</template>

<script>
import {Inertia} from "@inertiajs/inertia";
export default {
    name: "JobAdIndex",
    props:{
        jobAds :{
            required: true
        }
    },
    methods:{
        showAd(id){
            Inertia.visit(`/job-ad/${id}`);
        }
    }
}
</script>

<style scoped>

</style>
