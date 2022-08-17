<script setup>
import BreezeButton from "@/Components/Button.vue"
import SkillInput from "@/Components/JobAd/SkillInput.vue"
import AgeRangeInput from "@/Components/JobAd/AgeRangeInput";
import LocationInput from "@/Components/JobAd/LocationInput"
</script>

<template>

    <form @submit.prevent="submit">
        <AgeRangeInput></AgeRangeInput>
        <LocationInput :postcodes = "postcodes" class="mt-2"></LocationInput>
        <SkillInput></SkillInput>
        <div class="flex items-center justify-end mt-2">
            <BreezeButton class="ml-4" >
                Submit
            </BreezeButton>
        </div>
    </form>

</template>

<script>
import { Inertia } from "@inertiajs/inertia";
export default {
    name: "SearchBox",
    props: {
        postcodes:{
            required: true
        }
    },
    computed:{
        job(){
            return this.$store.getters.job;
        }
    },
    methods:{
        submit(){
            Inertia.post('/job-ad/', this.$store.getters.job);
        },
    },
}
</script>

<style scoped>

</style>
