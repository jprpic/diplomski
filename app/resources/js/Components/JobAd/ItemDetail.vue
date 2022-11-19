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
            <div class="flex flex-row justify-center space-x-8">
                <div>
                    <button type="button" @click="setComponent('kandidati')" :class="activeClass('kandidati')" class="bg-transparent text-indigo-600 font-semibold hover:bg-indigo-400 hover:text-white py-2 px-4 border-indigo-400 rounded">
                            Kandidati
                    </button>
                </div>
                <div>
                    <button type="button" @click="setComponent('prijavnici')" :class="activeClass('prijavnici')" class="bg-transparent text-indigo-600 font-semibold hover:bg-indigo-400 hover:text-white py-2 px-4 border-indigo-400 rounded">
                            Prijavnici
                    </button>
                </div>
            </div>
            <component :is="componentClass" v-bind="componentProperties"></component>
        </div>
    </div>
</template>

<script>
import { usePage } from "@inertiajs/inertia-vue3";
import TargetList from "@/Components/TargetList.vue";
import ApplicantsList from "@/Components/ApplicantsList";
import { Inertia } from "@inertiajs/inertia";
export default {
    name: "Item.vue",
    components: { TargetList, ApplicantsList },
    props: {
        jobAd: {
            required: true,
        },
    },
    data() {
        return {
            component: 'kandidati'
        }
    },
    computed: {
        wantedSkills() {
            let skillNames = [];
            this.jobAd.skills.forEach((id) =>
                skillNames.push(this.getSkillName(id))
            );
            return skillNames.join(", ");
        },
        componentClass() {
            return this.component === 'kandidati' ? 'TargetList' : 'ApplicantsList';
        },
        componentProperties: function() {
            if (this.component === 'kandidati') {
                return {
                    search : this.jobAd,
                    searchedSkills : this.jobAd.skills
                }
            }
            else {
                return {
                    jobAd: this.jobAd,
                    searchedSkills : this.jobAd.skills
                }
            }
        }
    },
    methods: {
        getSkillName(id) {
            const skills = usePage().props.value.availableSkills;
            return skills.find((el) => el.id === id).name;
        },
        showDetails() {
            Inertia.visit(`/job-ad/${this.jobAd.id}/details`);
        },
        setComponent(value) {
            this.component = value;
        },
        activeClass(component) {
            return this.component === component ? "border-b-4" : "";
        },
    },
};
</script>

<style scoped></style>
