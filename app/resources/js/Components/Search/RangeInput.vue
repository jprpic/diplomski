<script setup>
import BreezeLabel from "@/Components/Label"
import BreezeInput from "@/Components/Input"
</script>

<template>
    <div class="flex mt-1">
        <BreezeInput type="number" class="block w-fit grow-0" min="0" :max="value.top ? value.top : 100"
                     :value="value.bot" @input="$emit('update:bot', $event.target.value)"/>
        <span class="text-2xl mx-2 mt-1"> - </span>
        <BreezeInput type="number" class="block w-fit grow-0" :min="value.bot ? value.bot : 0" max="100"
                     :value="value.top" @input="$emit('update:top', $event.target.value)"/>
    </div>
</template>

<script>
export default {
    name: "RangeInput.vue",
    props:['value'],
    emits:['update:bot', 'update:top']
}
</script>

<style scoped>

</style>
