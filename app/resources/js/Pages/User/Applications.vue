<script setup>
import AuthUser from "@/Layouts/AuthUser.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import SuggestedJobItem from "@/Components/JobAd/SuggestedJobItem";
</script>

<template>
    <Head title="Dashboard" />

    <AuthUser>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Oglasi na koje ste prijavljeni
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div
                        class="p-6 bg-white border-b border-gray-200"
                        v-if="suggestedJobAds === null"
                    >
                        <div
                            class="flex p-4 bg-gray-100 rounded-lg dark:bg-gray-700"
                            role="alert"
                        >
                            <div
                                class="ml-3 font-medium text-gray-700 dark:text-gray-300"
                            >
                                <p>
                                    Nemate životopis! Možete ga kreirati
                                    odlaskom na
                                    <Link
                                        href="/cv/create"
                                        class="font-semibold underline"
                                        >Novi životopis</Link
                                    >!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div v-else>
                        <SuggestedJobItem
                            v-for="ad in suggestedJobAds"
                            :key="ad.id"
                            :jobAd="ad.jobAd"
                            :skills="ad.skills"
                            :isApplied="ad.isApplied"
                        />
                    </div>
                </div>
            </div>
        </div>
    </AuthUser>
</template>

<script>
export default {
    props: {
        suggestedJobAds: {
            required: true,
        },
    },
};
</script>
