<template>
  <div class="flex ml-2 pb-2">
      <div class="grow mt-2 mx-2 flex-col">
          <div>
              <BreezeLabel for="skill_name" value="Name" />
              <BreezeInput id="skill_name" type="text" class="mt-1 block w-full" required autofocus
                           :value="skill.name"
                           @input="updateSkill('name', $event.target.value)"/>
          </div>
          <div v-if="searchedSkills && searchedSkills.length > 0" class="overflow-auto max-h-40 px-4 pt-2 border border-gray-200 rounded-md shadow-sm">
              <p class="my-1" v-for="skill in searchedSkills">
                <button type="button" @click="updateSkill('name', skill.name)" >
                    {{ skill.name }}
                </button>
              </p>
          </div>
      </div>

      <div class="flex-none items-stretch mx-2 mt-2">
          <BreezeLabel for="level" value="Level" />

          <select name="level" id="level" class="mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                  :value="skill.level"
                  @input="updateSkill('level', $event.target.value)">
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
export default {
    name: "SkillItem.vue",
    components: {
        BreezeLabel,
        BreezeInput,
        BreezeButton
    },
    props:['index'],
    computed:{
        skill(){
            const skillClone = JSON.parse(JSON.stringify(this.$store.getters.cv.skills[this.index]));
            skillClone.index = this.index;
            return skillClone;
        },
        radioButtonName(){
            return `skillType${this.index}`;
        },
        availableSkills(){
            return this.$store.getters.availableSkills.sort((a, b) => a.name.localeCompare(b.name));
        },
        searchedSkills(){
            // If the input is empty or a name of an existing skill is entered, hide the autocompletes
            if(this.skill.name === '' || this.availableSkills.filter(skill => skill.name === this.skill.name).length){
                return null;
            }
            return this.availableSkills.filter(skill => skill.name.toLowerCase().includes(this.skill.name.toLowerCase()));
        }
    },
    methods:{
        updateSkill(key, value){
            // Check if contact has property that's being changed
            if(this.skill.hasOwnProperty(key)){
                this.skill[key] = value;
                this.$store.dispatch('updateSkill', this.skill)
            }
        },

    }
}
</script>

<style scoped>

</style>
