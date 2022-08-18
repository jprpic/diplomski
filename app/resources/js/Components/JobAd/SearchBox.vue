<script setup>
import BreezeButton from "@/Components/Button.vue"
import SkillInput from "@/Components/JobAd/SkillInput.vue"
import AgeRangeInput from "@/Components/JobAd/AgeRangeInput";
import LocationInput from "@/Components/JobAd/LocationInput";
import BreezeLabel from "@/Components/Label.vue";
import BreezeInput from "@/Components/Input.vue";
</script>

<template>

    <form @submit.prevent="submit">
        <div>
            <BreezeLabel for="name" value="Job name" />
            <BreezeInput id="name" type="text" class="mt-1 block w-full" required autofocus
                         :value="job.name"
                         @input="updateName($event.target.value)"   />
        </div>
        <AgeRangeInput class="mt-2"></AgeRangeInput>
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
        updateName(name){
            this.$store.dispatch('updateJobName', name);
        },
    },

}
</script>

<style scoped>

</style>
