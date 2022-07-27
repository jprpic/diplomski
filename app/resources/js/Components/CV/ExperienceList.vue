<template>
    <div class="border border-gray-200 rounded-md shadow-sm">
        <div v-for="(experience, index) in experiences" :key="index">
            <ExperienceItem @remove-experience="removeExperience(index)"
                v-model:name="experience.name" v-model:source="experience.source"
                v-model:type="experience.type" v-model:results="experience.results"/>
        </div>

    </div>
    <BreezeButton class="mt-2" type="button" @click="createExperienceField()" >Add Experience</BreezeButton>
</template>

<script>
import ExperienceItem from "@/Components/CV/ExperienceItem";
import BreezeButton from '../Button.vue';
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
                results: ['']
            }]
        }
    },
    methods:{
        createExperienceField(){
            this.experiences.push({
                name: '',
                source: '',
                type: '',
                results: ['']
            })
        },
        removeExperience(index){
            if (index > -1) { // only splice array when item is found
                this.experiences.splice(index, 1); // 2nd parameter means remove one item only
            }
        }
    }
}
</script>

<style scoped>

</style>
