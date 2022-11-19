<script setup>
import SearchItem from "@/Components/Search/SearchItem";
</script>

<template>
    <div class="flex flex-col" v-if="applicants.length">
        <div
            class="flex justify-center"
            v-for="target in applicants"
            :key="target.id"
        >
            <button class="mt-2 w-2/3" type="button" @click="showCV(target.id)">
                <SearchItem
                    :target="target"
                    :searchedSkills="searchedSkills"
                ></SearchItem>
            </button>
        </div>
    </div>
    <div class="flex justify-center w-full" v-else-if="!applicants.length">
        <p class="text-lg font-semibold">
            Nažalost, nemate prijavnika na ovom oglasu!
        </p>
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import axios from "axios";
export default {
    name: "ApplicantsList.vue",
    props: {
        searchedSkills: {
            required: true,
        },
        jobAd: {
            required: true,
        },
    },
    data() {
        return {
            applicants: [],
        };
    },
    methods: {
        showCV(id) {
            Inertia.get(`/cv/${id}`);
        },
        getData() {
            axios.get(`/api/application/${this.jobAd.id}`).then((response) => {
                this.applicants = JSON.parse(response.data);
            });
        },
    },
    mounted() {
        this.getData();
    },
};
</script>

<style scoped></style>
