<script>
export default {
    props: ['modelValue'],
    emits: ['update:modelValue']
}
</script>

<template><textarea class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full p-2 mt-1 pl-3" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input"></textarea></template>
