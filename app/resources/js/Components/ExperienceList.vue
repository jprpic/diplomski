<template>
    <div class="border border-gray-200 rounded-md shadow-sm">
        <div v-for="(experience, index) in experiences" :key="index">
            <ExperienceItem
                v-model:name="experience.name" v-model:source="experience.source"
                v-model:type="experience.type" v-model:results="experience.results"/>
        </div>

    </div>
    <BreezeButton class="mt-2" type="button" @click="createExperienceField()" >Add Experience</BreezeButton>
</template>

<script>
import ExperienceItem from "@/Components/ExperienceItem";
import BreezeButton from './Button.vue';
export default {
    name: "ExperienceList.vue",
    components:{
        BreezeButton,
        ExperienceItem
    },
    data(){
        return{
            experiences: [{
                name: '',
                source: '',
                type: '',
                results: []
            }]
        }
    },
    methods:{
        createExperienceField(){
            this.experiences.push({
                name: '',
                source: '',
                type: '',
                results: []
            })
        }
    }
}
</script>

<style scoped>

</style>
