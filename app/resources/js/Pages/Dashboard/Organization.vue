<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AuthOrg from "@/Layouts/AuthOrg.vue";
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthOrg>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Vaši oglasi za posao
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Success Flash -->
                        <div
                            v-if="this.successFlash"
                            class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                            role="alert"
                        >
                            <span class="font-medium">{{ successFlash }}</span>
                        </div>
                        <div
                            v-if="jobAds === null"
                            class="flex p-4 bg-gray-100 rounded-lg dark:bg-gray-700"
                            role="alert"
                        >
                            <div
                                class="ml-3 font-medium text-gray-700 dark:text-gray-300"
                            >
                                <p>
                                    Nemate opis tvrtke! Možete započeti s
                                    <Link
                                        href="/org-cv/create"
                                        class="font-semibold underline"
                                        >Kreiranjem 'O nama'</Link
                                    >!
                                </p>
                            </div>
                        </div>
                        <div
                            v-if="jobAds && !jobAds.length"
                            id="alert-5"
                            class="flex p-4 bg-gray-100 rounded-lg dark:bg-gray-700"
                            role="alert"
                        >
                            <!-- JobAd Empty List -->
                            <div
                                class="ml-3 font-medium text-gray-700 dark:text-gray-300"
                            >
                                <p>
                                    Nemate niti jedan oglas za posao! Možete
                                    započeti s
                                    <Link
                                        href="/job-ad/create"
                                        class="font-semibold underline"
                                        >Kreiranjem oglasa</Link
                                    >!
                                </p>
                            </div>
                        </div>
                        <div v-else>
                            <!-- JobAd List -->
                            <div v-for="ad in jobAds" :key="ad.id">
                                <div
                                    class="w-full p-4 mb-4 border border-gray-200 rounded-md shadow-md bg-gray-50"
                                >
                                    <div
                                        class="flex justify-between items-center"
                                    >
                                        <div></div>
                                        <div class="grow text-center">
                                            <button
                                                @click="showAd(ad.id)"
                                                type="button"
                                                class="w-full py-2"
                                            >
                                                <p class="text-xl font-bold">
                                                    {{ ad.name }}
                                                </p>
                                            </button>
                                        </div>
                                        <div class="flex flex-row space-x-2">
                                            <div>
                                                <button
                                                    type="button"
                                                    @click="EditAd(ad.id)"
                                                >
                                                    <img
                                                        alt="Edit icon"
                                                        :src="'/images/edit.png'"
                                                        class="object-contain h-6 w-6"
                                                    />
                                                </button>
                                            </div>
                                            <div>
                                                <button
                                                    type="button"
                                                    @click="RemoveAd(ad.id)"
                                                >
                                                    <img
                                                        alt="Delete icon"
                                                        :src="'/images/delete.png'"
                                                        class="object-contain h-6 w-6"
                                                    />
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthOrg>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import { usePage } from "@inertiajs/inertia-vue3";
import { toRaw } from "vue";
export default {
    props: {
        jobAds: {
            required: true,
        },
    },
    computed: {
        successFlash() {
            return toRaw(usePage().props.value.flash.status);
        },
    },
    methods: {
        showAd(id) {
            Inertia.visit(`/job-ad/${id}`);
        },
        RemoveAd(id) {
            Inertia.delete(`/job-ad/${id}`, {
                onBefore: () =>
                    confirm("Jeste li sigurni da želite obrisati ovaj oglas?"),
            });
        },
        EditAd(id) {
            Inertia.visit(`/job-ad/${id}/edit`);
        },
    },
};
</script>
