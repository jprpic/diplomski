<template>
  <div class="flex ml-2 pb-2">
      <div class="grow mt-2 mx-2 flex-col">
          <div>
              <BreezeLabel for="skill_name" value="Name" />
              <BreezeInput type="text" class="mt-1 block w-full" required
                           v-model="name"/>
          </div>
          <div v-if="searchedSkills && searchedSkills.length > 0" class="overflow-auto max-h-40 px-4 pt-2 border border-gray-200 rounded-md shadow-sm">
              <p class="my-1" v-for="skill in searchedSkills">
                <button type="button" @click="() => {updateSkill('skill_id', skill.id); this.name = skill.name;}" >
                    {{ skill.name }}
                </button>
              </p>
          </div>
      </div>

      <div class="flex-none items-stretch mx-2 mt-2">
          <BreezeLabel for="level" value="Level" />

          <select name="level" id="level" required class="mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                  :value="skill.proficiency"
                  @input="updateSkill('proficiency', $event.target.value)">
              <option disabled value="">Please select one</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
          </select>
      </div>

  </div>
</template>

<script>
import BreezeLabel from '../Label.vue';
import BreezeInput from '../Input.vue';
import BreezeButton from '../Button.vue';
import {usePage} from "@inertiajs/inertia-vue3";
export default {
    name: "SkillItem.vue",
    components: {
        BreezeLabel,
        BreezeInput,
        BreezeButton
    },
    props:['index'],
    data(){
        return{
            name: '',
        }
    },
    computed:{
        skillName(){
            if(this.skill.skill_id){
                return this.availableSkills.find(skill => skill.id === this.skill.skill_id).name;
            }
            return this.name;
        },
        skill(){
            const skillClone = JSON.parse(JSON.stringify(this.$store.getters.cv.skills[this.index]));
            skillClone.index = this.index;
            return skillClone;
        },
        radioButtonName(){
            return `skillType${this.index}`;
        },
        availableSkills(){
            return usePage().props.value.availableSkills.sort((a, b) => a.name.localeCompare(b.name));
            // return usePage().props.value.availableSkills.filter( ( el ) => !this.userSkills.includes( el.id ) );
        },
        searchedSkills(){
            // If the input is empty or a name of an existing skill is entered, hide the autocompletes
            if(this.name === '' || this.availableSkills.filter(skill => skill.name === this.name).length){
                return null;
            }
            return this.availableSkills
                .filter( ( el ) => !this.userSkills.includes( el.id ) )
                .filter(skill => skill.name.toLowerCase().startsWith(this.name.toLowerCase()));
        },
        userSkills(){
            return this.$store.getters.cv.skills.map(skill => skill.skill_id);
        },
    },
    methods:{
        updateSkill(key, value){
            // Check if contact has property that's being changed
            if(this.skill.hasOwnProperty(key)){
                this.skill[key] = value;
                this.$store.dispatch('updateSkill', this.skill)
            }
        },
    },
    mounted(){
        this.name = this.skillName;
    }
}
</script>

<style scoped>

</style>
