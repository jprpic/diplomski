<script setup>
import BreezeInput from "@/Components/Input"
</script>

<template>
    <div class="flex mt-1">
        <BreezeInput type="number" class="block w-fit grow-0" min="0" :max="max ? max : 100"
                     :value="min" @input="$emit('update:min', $event.target.value)"/>
        <span class="text-2xl mx-2 mt-1"> - </span>
        <BreezeInput type="number" class="block w-fit grow-0" :min="min ? min : 0" max="100"
                     :value="max" @input="$emit('update:max', $event.target.value)"/>
    </div>
</template>

<script>
export default {
    name: "RangeInput.vue",
    props:['min', 'max'],
    emits:['update:min', 'update:max']
}
</script>

<style scoped>

</style>
