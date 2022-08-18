<script setup>

</script>

<template>
    <div class="p-6 border border-gray-200 rounded-md shadow-md bg-gray-50">
        <div class="flex flex-col">
            <div><p class="font-bold text-2xl">{{ jobAd.name }}</p></div>
            <div class="mt-1">
                <p>Age: <span class="font-semibold">{{ jobAd.minAge }}</span> - <span class="font-semibold">{{ jobAd.maxAge }}</span></p>
            </div>
            <div>
                <p>Years of experience: <span class="font-semibold">{{ jobAd.minExp }}</span> - <span class="font-semibold">{{ jobAd.maxExp }}</span></p>
            </div>
            <div class="flex flex-row" v-if="jobAd.county">
                <p>{{ jobAd.county }}</p>
                <p v-if="jobAd.city"> {{ jobAd.city}}</p>
            </div>
            <div>
                <p> Wanted skills: <span class="font-semibold">{{ wantedSkills }}</span> </p>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <TargetList :search="this.jobAd" :searchedSkills="this.jobAd.skills"/>
    </div>
</template>

<script>
import {usePage} from "@inertiajs/inertia-vue3";
import TargetList from "@/Components/TargetList.vue";
export default {
    name: "Item.vue",
    components: {TargetList},
    props:{
        jobAd:{
            required: true
        }
    },
    computed:{
        wantedSkills(){
            let skillNames = [];
            this.jobAd.skills.forEach(id => skillNames.push(this.getSkillName(id)));
            return skillNames.join(', ');
        }
    },
    methods:{
        getSkillName(id){
            const skills = usePage().props.value.availableSkills;
            return skills.find(el => el.id === id).name;
        }
    }
}
</script>

<style scoped>

</style>
