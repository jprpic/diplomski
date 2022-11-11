<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <div>
        <button type="button" class="text-left w-full" @click="showDetails">
            <div
                class="p-6 border border-gray-200 rounded-md shadow-md bg-gray-50 w-full"
            >
                <div class="flex flex-col">
                    <div>
                        <p class="font-bold text-2xl">{{ jobAd.name }}</p>
                    </div>
                    <div class="mt-1">
                        <p>
                            Godine:
                            <span class="font-semibold">{{
                                jobAd.minAge
                            }}</span>
                            -
                            <span class="font-semibold">{{
                                jobAd.maxAge
                            }}</span>
                        </p>
                    </div>
                    <div>
                        <p>
                            Godine iskustva:
                            <span class="font-semibold">{{
                                jobAd.minExp
                            }}</span>
                            -
                            <span class="font-semibold">{{
                                jobAd.maxExp
                            }}</span>
                        </p>
                    </div>
                    <div class="flex flex-row" v-if="jobAd.county">
                        <p>
                            Županija:
                            <span class="font-semibold">{{
                                jobAd.county
                            }}</span>
                        </p>
                        <p v-if="jobAd.city" class="ml-2">
                            Grad:
                            <span class="font-semibold">{{ jobAd.city }}</span>
                        </p>
                    </div>
                    <div>
                        <p>
                            Tražene vještine:
                            <span class="font-semibold">{{
                                wantedSkills
                            }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </button>
        <div class="mt-4">
            <TargetList
                :search="this.jobAd"
                :searchedSkills="this.jobAd.skills"
            />
        </div>
    </div>
</template>

<script>
import { usePage } from "@inertiajs/inertia-vue3";
import TargetList from "@/Components/TargetList.vue";
import { Inertia } from "@inertiajs/inertia";
export default {
    name: "Item.vue",
    components: { TargetList },
    props: {
        jobAd: {
            required: true,
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
    },
    methods: {
        getSkillName(id) {
            const skills = usePage().props.value.availableSkills;
            return skills.find((el) => el.id === id).name;
        },
        showDetails() {
            Inertia.visit(`/job-ad/${this.jobAd.id}/details`);
        },
    },
};
</script>

<style scoped></style>
