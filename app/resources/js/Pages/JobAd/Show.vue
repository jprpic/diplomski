<script setup>
import AuthOrg from '@/Layouts/AuthOrg.vue';
import JobAdItem from '@/Components/JobAd/ItemDetail.vue'
</script>

<template>
    <AuthOrg>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <p class="mb-4 -mt-2 text-2xl text-bold"> Job Ad for ...</p>
                        <JobAdItem :jobAd = "jobAd"></JobAdItem>
                    </div>
                </div>
            </div>
        </div>
    </AuthOrg>
</template>

<script>
export default {
    name: "JobAd.vue",
    props:{
        jobAd:{
            required: true
        }
    },
}
</script>

<style scoped>

</style>
