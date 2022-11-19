<script setup>
import BreezeButton from "@/Components/Button";
</script>

<template>
    <div
        class="p-4 mb-4 border border-gray-200 rounded-md shadow-md bg-gray-50 w-full"
    >
        <div class="flex flex-row">
            <div class="grow">
                <button class="w-full" type="button" @click="visitJobAd()">
                    <div class="flex flex-row">
                        <div>
                            <img
                                :src="jobAd.org_cv.img_url"
                                class="object-contain h-24 w-24 rounded-full"
                            />
                        </div>
                        <div
                            class="grid content-center ml-4 grow justify-start"
                        >
                            <div>
                                <h2 class="text-2xl font-bold">
                                    {{ jobAd.name }}
                                </h2>
                            </div>
                            <div>
                                <p class="text-lg font-semibold">
                                    {{ jobAd.org_cv.name }}
                                </p>
                            </div>
                        </div>
                    </div>
                </button>
            </div>

            <div class="flex flex-col items-center">
                <div>
                    <p>Sličnost: {{ matchingPercentage }}</p>
                </div>
                <div class="mt-2">
                    <button
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:shadow-outline-gray transition ease-in-out duration-150"
                        type="button"
                        :class="buttonClass"
                        @click="applyForJob()"
                    >
                        {{ applyButtonlabel }}
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-2 flex w-full justify-center">
            <div
                class="text-md font-medium w-1/3 rounded-lg bg-gradient-to-r from-lime-400/50 flex flex-col text-center py-2"
            >
                <div v-for="skillId in skills.matchingSkills" :key="skillId">
                    <span class="text-lime-900">
                        {{ getSkillName(skillId) }}
                    </span>
                </div>
            </div>
            <div
                class="text-md font-medium w-1/3 rounded-lg bg-gradient-to-l from-red-400/50 flex flex-col text-center py-2"
            >
                <div v-for="skillId in skills.differentSkills" :key="skillId">
                    {{ getSkillName(skillId) }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { usePage } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import axios from "axios";

export default {
    name: "Item.vue",
    props: {
        jobAd: {
            required: true,
        },
        skills: {
            matchingSkills: {
                required: true,
            },
            differentSkills: {
                required: true,
            },
        },
        isApplied: {
            required: true,
        },
    },
    data() {
        return {
            isAppliedData: this.isApplied,
        };
    },
    computed: {
        availableSkills() {
            return usePage().props.value.availableSkills;
        },
        matchingPercentage() {
            return (
                (100 * Object.keys(this.skills.matchingSkills).length) /
                    (Object.keys(this.skills.matchingSkills).length +
                        Object.keys(this.skills.differentSkills).length) +
                "%"
            );
        },
        buttonClass() {
            if (this.isAppliedData) {
                return "bg-indigo-400  hover:bg-indigo-300 active:bg-indigo-500  focus:border-indigo-500 ";
            } else {
                return "bg-gray-800  hover:bg-gray-700 active:bg-gray-900  focus:border-gray-900 ";
            }
        },
        applyButtonlabel() {
            return this.isAppliedData ? "Prijavljen" : "Prijavi se";
        },
    },
    methods: {
        getSkillName(id) {
            return this.availableSkills.find((el) => el.id === id)?.name;
        },
        visitJobAd() {
            Inertia.visit(`/job-ad/${this.jobAd.id}/details`);
        },
        applyForJob() {
            axios
                .post(`/application`, {
                    job_id: this.jobAd.id,
                    user_id: this.$store.getters.user.id,
                })
                .then((response) => {
                    if (response.status === 201) {
                        this.isAppliedData = true;
                    } else if (response.status === 203) {
                        this.isAppliedData = false;
                    }
                })
                .catch((error) => {});
        },
    },
};
</script>

<style scoped></style>
