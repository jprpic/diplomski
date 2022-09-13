<script setup>
import SearchItem from '@/Components/Search/SearchItem';
</script>

<template>
    <div class="flex flex-col">
        <div class="flex justify-center" v-for="target in currentTargets" :key="target.id">
            <button class="mt-2 w-2/3" type="button" @click="showCV(target.id)">
                <SearchItem :target="target" :searchedSkills="searchedSkills"></SearchItem>
            </button>
        </div>
    </div>
</template>

<script>
import {Inertia} from "@inertiajs/inertia";

export default {
    name: "TargetList.vue",
    props:{
        search:{
            required: true
        },
        searchedSkills: {
            required: true
        }
    },
    data(){
        return{
            currentTargets: [],
            page: -1
        }
    },
    methods:{
        getData(){
            // Append data only if the new page is loaded
            const page = Math.round(this.currentTargets.length / 15);
            if(page > this.page){
                this.page = page;
                axios.get('/api/search', {
                    params:{
                        'minAge' : this.search.minAge,
                        'maxAge' : this.search.maxAge,
                        'minExp' : this.search.minExp,
                        'maxExp' : this.search.maxExp,
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
        showCV(id){
            Inertia.get(`/cv/${id}`);
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
