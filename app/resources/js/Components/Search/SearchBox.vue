<script setup>
import BreezeButton from "@/Components/Button.vue"
import SkillInput from "@/Components/Search/SkillInput.vue"
import AgeRangeInput from "@/Components/Search/AgeRangeInput";
import LocationInput from "@/Components/Search/LocationInput"
import SearchItem from "@/Components/Search/SearchItem";
</script>

<template>

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

    <div class="flex justify-center" v-for="target in currentTargets" :key="target.id">
        <button class="mt-2 w-2/3" type="button" @click="showCV(target.id)">
            <SearchItem :target="target"></SearchItem>
        </button>

    </div>

</template>

<script>
import {Inertia} from "@inertiajs/inertia";
export default {
    name: "SearchBox",
    props:['postcodes','targets'],
    data(){
        return{
            currentTargets: [],
            page: -1
        }
    },
    computed:{
        addedSkills(){
            return this.$store.getters.search.skills;
        },
        search(){
            return this.$store.getters.search;
        }
    },
    methods:{
        showCV(id){
          Inertia.get(`/cv/${id}`);
        },
        getData(){
            // Append data only if the new page is loaded
            const page = Math.round(this.currentTargets.length / 15);
            if(page > this.page){
                this.page = page;
                // this.currentTargets = this.currentTargets.concat(this.targets.slice(page*15,(page+1)*15))
                axios.get('/api/search', {
                    params:{
                        'ageRange[bot]' : this.search.ageRange.bot,
                        'ageRange[top]' : this.search.ageRange.top,
                        'expRange[bot]' : this.search.expRange.bot,
                        'expRange[top]' : this.search.expRange.top,
                        skills: this.search.skills,
                        county: this.search.county ? this.search.county : null,
                        city: this.search.city ? this.search.city : null,
                        page: this.page
                    }
                }).then(response => {
                    this.currentTargets = this.currentTargets.concat(response.data);
                })
            }

        },
        submit(){
            Inertia.get('/search', this.$store.getters.search);
        },
        handleScroll(e){
            let bottomOfWindow = document.documentElement.scrollTop + window.innerHeight === document.documentElement.offsetHeight;

            if (bottomOfWindow) {
                this.getData();
            }
        }
    },
    mounted(){
        this.getData();
        window.addEventListener("scroll", this.handleScroll);
    },
    unmounted(){
        window.removeEventListener("scroll", this.handleScroll)
    },
}
</script>

<style scoped>

</style>
