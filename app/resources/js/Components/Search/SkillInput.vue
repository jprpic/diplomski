<script setup>
import BreezeButton from "@/Components/Button.vue"
import BreezeInput from "@/Components/Input.vue"
import BreezeLabel from "@/Components/Label.vue"
</script>

<template>
    <div>
        <div>
            <BreezeLabel for="skill_name" value="Skill name" />
            <BreezeInput type="text" class="mt-1 block w-full"
                         v-model="name"/>
        </div>
        <div v-if="searchedSkills && searchedSkills.length > 0" class="overflow-auto max-h-40 px-4 pt-2 border border-gray-200 rounded-md shadow-sm">
            <p class="my-1" v-for="skill in searchedSkills">
                <button type="button" @click="addSkill(skill)" >
                    {{ skill.name }}
                </button>
            </p>
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
      }
    },
    computed:{
        searchedSkills(){
            // If the input is empty or a name of an existing skill is entered, hide the autocompletes
            if(this.name === '' || this.availableSkills.filter(skill => skill.name === this.name).length){
                return null;
            }
            return this.availableSkills.filter(skill => skill.name.toLowerCase().includes(this.name.toLowerCase()));
        },
        availableSkills(){
            return usePage().props.value.availableSkills.filter( ( el ) => !this.addedSkills.includes( el ) );
        },
        addedSkills(){
            return this.$store.getters.search.skills;
        }
    },
}
</script>

<style scoped>

</style>
