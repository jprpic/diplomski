<template>
    <div class="border border-gray-200 rounded-md shadow-sm">
        <div v-for="(experience, index) in experiences" :key="index">
            <ExperienceItem :index="index" />
        </div>
    </div>
    <BreezeButton class="mt-2" type="button" @click="addExperience()"
        >Dodaj iskustvo</BreezeButton
    >
</template>

<script>
import ExperienceItem from "@/Components/CV/ExperienceItem";
import BreezeButton from "../Button.vue";
export default {
    name: "ExperienceList.vue",
    components: {
        BreezeButton,
        ExperienceItem,
    },
    computed: {
        experiences() {
            return this.$store.getters.cv.experiences;
        },
    },
    methods: {
        addExperience() {
            this.$store.dispatch("addExperience");
        },
    },
};
</script>

<style scoped></style>
