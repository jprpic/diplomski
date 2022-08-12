<script setup>
import BreezeButton from "@/Components/Button.vue"
import BreezeInput from "@/Components/Input.vue"
import BreezeLabel from "@/Components/Label.vue"
</script>

<template>
    <div class="mt-2">
        <div>
            <BreezeLabel for="skill_name" value="Skill name" />
            <BreezeInput type="text" class="mt-1 block w-full"
                         :value="name"
                         @input="updateInput($event.target.value)" />
        </div>
        <div v-if="searchedSkills && searchedSkills.length > 0" class="overflow-auto max-h-40 px-4 pt-2 border border-gray-200 rounded-md shadow-sm">
            <p class="my-1" v-for="skill in searchedSkills" :key="skill.id">
                <button type="button" @click="addSkill(skill.id)" >
                    {{ skill.name }}
                </button>
            </p>
        </div>
    </div>
    <div class="flex mt-2 flex-wrap">
        <div v-for="(skill, index) in addedSkills" :key="skill" class="flex items-center px-2 py-1 bg-white border border-gray-200 rounded-lg m-1">
            {{ skill.name }}
            <svg @click="removeSkill(index)" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </div>
    </div>
</template>

<script>
import {usePage} from "@inertiajs/inertia-vue3";

export default {
    name: "SkillItem.vue",
    data(){
        return{
            name : '',
        }
    },
    methods:{
        addSkill(skill){
            this.$store.dispatch('addSearchSkill', skill);
            this.name= '';
        },
        removeSkill(index){
            this.$store.dispatch('removeSearchSkill', index);
        },
        updateInput(value){
            this.name = value;
            const skill = this.availableSkills.find(skill => skill.name.toLowerCase() === this.name.toLowerCase());
            if(skill){
                this.addSkill(skill.id);
            }
        }
    },
    computed:{
        searchedSkills(){
            // If the input is empty or a name of an existing skill is entered, hide the autocompletes
            if(this.name === '' || this.availableSkills.filter(skill => skill.name === this.name).length){
                return null;
            }
            return this.availableSkills.filter(skill => skill.name.toLowerCase().startsWith(this.name.toLowerCase()));
        },
        availableSkills(){
            // Exclude already added skills from available skills
            return usePage().props.value.availableSkills.filter( ( el ) => !this.userSkills.includes( el.id ) );
        },
        userSkills(){
            return this.$store.getters.search.skills;
        },
        addedSkills(){
            return usePage().props.value.availableSkills.filter( ( el ) => this.userSkills.includes( el.id ) );
        }
    },
}
</script>

<style scoped>

</style>
