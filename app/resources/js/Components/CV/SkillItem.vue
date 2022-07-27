<template>
  <div class="flex ml-2 pb-2">
      <div class="flex flex-none justify-center py-2 mx-2">
          <div class="grid justify-items-center mr-1">
              <BreezeLabel for="hard" value="Hard" />
              <input type="radio" id="hard" name="type" value="hard" class="mt-2">
          </div>

          <div class="grid justify-items-center ml-1">
              <BreezeLabel for="soft" value="Soft" />
              <input type="radio" id="soft" name="type" value="soft" class="mt-2">
          </div>
      </div>
      <div class="grow mt-2 mx-2">
          <BreezeLabel for="name" value="Name" />
          <BreezeInput id="name" type="text" class="mt-1 block w-full" v-model="name" required autofocus  />
      </div>
      <div class="flex-none items-stretch mx-2 mt-2">
          <BreezeLabel for="level" value="Level" />

          <select name="level" id="level" class="mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                  :value="type"
                  @input="$emit('update:type', $event.target.value)">
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
    data(){
        return{
            type: '',
            name: '',
            level: ''
        }
    }
}
</script>

<style scoped>

</style>
