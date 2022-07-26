
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
        <div class="flex flex-col grow mt-2 mx-4">
            <BreezeLabel for="results" value="Results" class="flex-initial" />
            <div v-for="(result, index) in results" :key="index">
                <BreezeInput id="source" type="text" class="mt-2 block w-full" required
                             v-model="results[index]"/>
            </div>
            <BreezeButton @click="addResult" type="button" class="w-32 mt-2">Add Result</BreezeButton>
        </div>


    </div>

</template>

<script>
import BreezeLabel from './Label.vue';
import BreezeInput from './Input.vue';
import BreezeButton from './Button.vue';
export default {
    name: "Experience.vue",
    components: {
        BreezeLabel,
        BreezeInput,
        BreezeButton
    },
    props: ['name','source','type','results'],
    emits: ['update:name','update:source','update:type','update:results'],
    methods:{
        addResult(){
            this.results.push('')
        }
    }
}
</script>

<style scoped>

</style>
