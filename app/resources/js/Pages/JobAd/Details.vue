<script setup>
import { Head } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Head title="Details" />
    <component v-bind:is="layout">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex flex-row items-start">
                            <button
                                @click="showAboutUs(jobAd.org_cv.id)"
                                class="min-w-fit mr-4"
                            >
                                <div
                                    class="p-4 mb-4 border border-gray-200 rounded-md shadow-md bg-gray-50"
                                >
                                    <div class="min-w-fit mt-2">
                                        <img
                                            :src="jobAd.org_cv.img_url"
                                            alt="Company image"
                                            class="object-contain h-32 w-32"
                                        />
                                    </div>
                                </div>
                            </button>
                            <div
                                class="p-4 border border-gray-200 rounded-md shadow-md bg-gray-50 flex flex-col text-gray-800 grow"
                            >
                                <div>
                                    <p class="text-2xl font-bold">
                                        {{ jobAd.name }}
                                    </p>
                                </div>
                                <div class="ml-4 mt-2">
                                    <p class="text-lg font-semibold">
                                        Opis Posla
                                    </p>
                                    <p class="whitespace-pre-line">
                                        {{ jobAd.description }}
                                    </p>
                                </div>
                                <div class="ml-4 mt-2">
                                    <p class="text-lg font-semibold">
                                        Odgovornosti
                                    </p>
                                    <ul class="list-disc ml-6">
                                        <li
                                            v-for="responsibility in jobAd.responsibilities"
                                        >
                                            {{ responsibility }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="ml-4 mt-2">
                                    <p class="text-lg font-semibold">
                                        Potrebne vještine
                                    </p>
                                    <ul class="list-disc ml-6">
                                        <li v-for="skill in jobAd.skills">
                                            {{ getSkillName(skill) }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </component>
</template>

<script>
import { usePage } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import AuthOrg from "@/Layouts/AuthOrg.vue";
import AuthUser from "@/Layouts/AuthUser";
import AuthAdmin from "@/Layouts/AuthAdmin";

let Empty;
export default {
    name: "Details.vue",
    components: {
        AuthUser,
        AuthOrg,
        AuthAdmin,
        Empty,
    },
    props: {
        jobAd: {
            required: true,
            type: Object,
        },
    },
    computed: {
        wantedSkills() {
            let skillNames = [];
            this.jobAd.skills.forEach((id) =>
                skillNames.push(this.getSkillName(id))
            );
            return skillNames.join(", ");
        },
        layout() {
            if (!usePage().props.value.auth.user) {
                return "empty";
            }
            const role_id = usePage().props.value.auth.user.role_id;
            if (role_id === 1) {
                return "auth-user";
            } else if (role_id === 2) {
                return "auth-org";
            } else if (role_id === 3) {
                return "auth-admin";
            }
        },
    },
    methods: {
        getSkillName(id) {
            const skills = usePage().props.value.availableSkills;
            return skills.find((el) => el.id === id)?.name;
        },
        showAboutUs(id) {
            Inertia.visit(`/org-cv/${id}`);
        },
    },
};
</script>

<style scoped></style>
