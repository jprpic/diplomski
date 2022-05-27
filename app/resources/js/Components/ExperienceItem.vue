
<template>
    <div class="flex">
        <div class="flex flex-col w-1/3 mt-2 ml-4">
            <div>
                <BreezeLabel for="name" value="Name" />
                <BreezeInput id="name" type="text" class="mt-1 block w-full" v-model="name" required autofocus  />
            </div>

            <div class="mt-1">
                <BreezeLabel for="source" value="Source" />
                <BreezeInput id="source" type="text" class="mt-1 block w-full" v-model="source" required autofocus  />
            </div>

            <div class="flex justify-center py-2">
                <div class="grid justify-items-center mr-1">
                    <BreezeLabel for="education" value="Education" />
                    <input type="radio" id="education" name="type" value="education">
                </div>

                <div class="grid justify-items-center ml-1">
                    <BreezeLabel for="employment" value="Employment" />
                    <input type="radio" id="employment" name="type" value="employment">
                </div>
            </div>
        </div>
        <div class="flex flex-col w-2/3 mt-2 ml-4">
            <span class="font-medium text-sm text-gray-700">Results</span>
            <div ref="inputs">

            </div>
        </div>
    </div>

</template>

<script>
import BreezeLabel from './Label.vue';
import BreezeInput from './Input.vue';
export default {
    name: "Experience.vue",
    components: {
        BreezeLabel,
        BreezeInput
    },
    data(){
        return{
            name: '',
            source: ''
        }
    }
}
</script>

<style scoped>

</style>
