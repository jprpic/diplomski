<template>
  <div class="border border-gray-200 rounded-md shadow-sm">
      <div v-for="(skill, index) in skills" class="flex">
          <div class="grow">
              <SkillItem/>
          </div>
          <div class="flex-none mx-2 items-stretch flex">
              <BreezeButton @click="removeSkill(index)" type="button" class="self-center mt-6">X</BreezeButton>
          </div>
      </div>
  </div>
    <div>
        <BreezeButton class="mt-2" type="button" @click="addSkill()" >Add Skill</BreezeButton>
    </div>
</template>

<script>
import SkillItem from "@/Components/CV/SkillItem.vue";
import BreezeButton from "@/Components/Button.vue"
export default {
    name: "SkillList.vue",
    components: {
        SkillItem,
        BreezeButton
    },
    data(){
        return{
            skills:[{
                type: '',
                name: '',
                level: ''
            }]
        }
    },
    methods:{
        addSkill(){
            this.skills.push({
                type: '',
                name: '',
                level: ''
            })
        },
        removeSkill(index){
            if (index > -1) { // only splice array when item is found
                this.skills.splice(index, 1); // 2nd parameter means remove one item only
            }
        }
    }
}
</script>

<style scoped>

</style>
