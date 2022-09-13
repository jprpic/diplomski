<template>
    <button
        type="button"
        class="p-4 mb-4 border border-gray-200 rounded-md shadow-md bg-gray-50 w-full"
        @click="visitJobAd()"
    >
        <div class="flex flex-row justify-between">
            <div>
                <img
                    :src="jobAd.org_cv.img_url"
                    class="object-contain h-24 w-24 rounded-full"
                />
            </div>
            <div class="grid content-center ml-4 grow justify-start">
                <div>
                    <h2 class="text-2xl font-bold">{{ jobAd.name }}</h2>
                </div>
                <div>
                    <p class="text-lg font-semibold">{{ jobAd.org_cv.name }}</p>
                </div>
            </div>
            <div>
                <p>Matching: {{ matchingPercentage }}</p>
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
    </button>
</template>

<script>
import { usePage } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

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
    },
    computed: {
        availableSkills() {
            return usePage().props.value.availableSkills;
        },
        matchingPercentage() {
            return (
                parseFloat(
                    (Object.keys(this.skills.matchingSkills).length /
                        (Object.keys(this.skills.matchingSkills).length +
                            Object.keys(this.skills.differentSkills).length)) *
                        100
                ).toPrecision(2) + "%"
            );
        },
    },
    methods: {
        getSkillName(id) {
            return this.availableSkills.find((el) => el.id === id)?.name;
        },
        visitJobAd() {
            Inertia.visit(`/job-ad/${this.jobAd.id}/details`);
        },
    },
};
</script>

<style scoped></style>
