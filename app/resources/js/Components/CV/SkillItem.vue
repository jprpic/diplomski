<template>
  <div class="flex ml-2 pb-2">
      <div class="flex flex-none justify-center py-2 mx-2">
          <div class="grid justify-items-center mr-1">
              <BreezeLabel for="hard" value="Hard" />
              <input type="radio" id="hard" :name="radioButtonName" value="hard" class="mt-2"
                     @input="updateSkill('type', $event.target.value)"
                     :checked = "skill.type === 'hard'">
          </div>

          <div class="grid justify-items-center ml-1">
              <BreezeLabel for="soft" value="Soft" />
              <input type="radio" id="soft" :name="radioButtonName" value="soft" class="mt-2"
                     @input="updateSkill('type', $event.target.value)"
                     :checked = "skill.type === 'soft'">
          </div>
      </div>
      <div class="grow mt-2 mx-2">
          <BreezeLabel for="name" value="Name" />
          <BreezeInput id="name" type="text" class="mt-1 block w-full" required autofocus
                       :value="skill.name"
                       @input="updateSkill('name', $event.target.value)"/>
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
