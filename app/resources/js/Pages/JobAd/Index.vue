<script setup>
import AuthOrg from '@/Layouts/AuthOrg.vue';
</script>

<template>
    <AuthOrg>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div v-for="ad in jobAds" :key="ad.id">
                            <button type="button" @click="showAd(ad.id)">
                                {{ ad }}
                            </button>
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
