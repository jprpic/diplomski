<script setup>
import BreezeLabel from "@/Components/Label"
import BreezeInput from "@/Components/Input"

</script>

<template>
    <div class="flex flex-col w-fit shrink-0">
        <div >
            <BreezeLabel for="age_range" value="Age range" />
        </div>
        <div class="flex">
            <BreezeInput type="number" class="mt-1 block w-fit grow-0" min="0" :max="top"
                         v-model="bot"/>
            <BreezeInput type="number" class="mt-1 block w-fit grow-0" :min="bot" max="100"
                         v-model="top"/>
        </div>

    </div>
</template>

<script>
export default {
    name: "AgeRangeInput.vue",
    data(){
        return{
            bot: 0,
            top: 100
        }
    }
}
</script>

<style scoped>

</style>
