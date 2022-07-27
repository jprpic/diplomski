
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
            <div class="flex justify-between items-end" >
                <BreezeLabel for="results" value="Results"/>
                <BreezeButton @click="$emit('remove-experience', expIndex)" type="button" class="-mr-2">Remove experience</BreezeButton>
            </div>

            <div v-for="(result, index) in results" :key="index" class="flex">
                <BreezeInput id="source" type="text" class="mt-2 block w-full" required
                             v-model="results[index]"/>
                <BreezeButton @click="removeResult(index)" type="button" class="ml-2 self-center mt-2">X</BreezeButton>
            </div>
            <BreezeButton @click="addResult" type="button" class="my-2 text-center grid" style="width: fit-content;">Add Result</BreezeButton>
        </div>


    </div>

</template>

<script>
import BreezeLabel from '../Label.vue';
import BreezeInput from '../Input.vue';
import BreezeButton from '../Button.vue';
export default {
    name: "Experience.vue",
    components: {
        BreezeLabel,
        BreezeInput,
        BreezeButton
    },
    props: ['name','source','type','results','expIndex'],
    emits: ['update:name','update:source','update:type','update:results','remove-experience'],
    methods:{
        addResult(){
            this.results.push('')
        },
        removeResult(index){
            if (index > -1) { // only splice array when item is found
                this.results.splice(index, 1); // 2nd parameter means remove one item only
            }
        }
    }
}
</script>

<style scoped>

</style>
