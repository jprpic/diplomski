<script setup>
import BreezeButton from "@/Components/Button.vue"
import SkillInput from "@/Components/Search/SkillInput.vue"
import AgeRangeInput from "@/Components/Search/AgeRangeInput";
import LocationInput from "@/Components/Search/LocationInput"
import SearchItem from "@/Components/Search/SearchItem";
import TargetList from "@/Components/TargetList";
</script>

<template>
    <div>
        <form @submit.prevent="submit">
            <AgeRangeInput></AgeRangeInput>
            <LocationInput :postcodes = "postcodes" class="mt-2"></LocationInput>
            <SkillInput></SkillInput>
            <div class="flex items-center justify-end mt-2">
                <BreezeButton class="ml-4" >
                    Search
                </BreezeButton>
            </div>
        </form>

        <TargetList :search="this.search" :searchedSkills="searchedSkills"></TargetList>
    </div>
</template>

<script>
import {Inertia} from "@inertiajs/inertia";
export default {
    name: "SearchBox",
    props:['postcodes'],

    computed:{
        search(){
            return this.$store.getters.search;
        },
        searchedSkills(){
            const queryString = window.location.search;
            if(queryString){
                const urlParams = new URLSearchParams(queryString);
                return urlParams.getAll('skills[]').map( skill => { return Number(skill); });
            }
            return [];
        },
    },
    methods:{
        submit(){
            Inertia.get('/search', this.$store.getters.search);
        },
    }

}
</script>

<style scoped>

</style>
