
<template>
    <div class="flex">
        <div class="flex flex-col w-1/3 mt-2 ml-4">
            <div>
                <BreezeLabel for="experience_name" value="Name" />
                <BreezeInput id="experience_name" type="text" class="mt-1 block w-full" required autofocus
                         :value = "experience.name"
                         @input="updateExperience('name', $event.target.value)"
                />
            </div>

            <div class="mt-1">
                <BreezeLabel for="source" value="Source" />
                <BreezeInput id="source" type="text" class="mt-1 block w-full" required autofocus
                             :value = "experience.source"
                             @input="updateExperience('source', $event.target.value)"
                />
            </div>
            <div class="flex justify-center py-2">
                <div class="grid justify-items-center mr-1">
                    <BreezeLabel for="education" value="Education" />
                    <input type="radio" id="education" :name="radioButtonName" value="education"
                           :checked="experience.type === 'education'"
                           @input="updateExperience('type', $event.target.value)">
                </div>

                <div class="grid justify-items-center ml-1">
                    <BreezeLabel for="employment" value="Employment" />
                    <input type="radio" id="employment" :name="radioButtonName" value="employment"
                           :checked="experience.type === 'employment'"
                           @input="updateExperience('type', $event.target.value)">
                </div>
            </div>
            <div class="flex flex-wrap justify-around items-center mt-2">
                <div>
                    <BreezeLabel for="started_at" value="Started at"/>
                    <DateInput id="started_at"
                               :month="experience.started_at.month" :year="experience.started_at.year"
                               @update:date="(date) => updateExperience('started_at', date)"/>
                </div>
                <div>
                    <BreezeLabel for="finished_at" value="Finished at"/>
                    <DateInput id="finished_at"
                               :month="experience.finished_at.month" :year="experience.finished_at.year"
                               @update:date="(date) => updateExperience('finished_at', date)"/>
                </div>

            </div>
        </div>
        <div class="flex flex-col grow mt-2 mx-4">
            <div class="flex justify-between items-end" >
                <BreezeLabel for="results" value="Results"/>
                <BreezeButton @click="removeExperience" type="button" class="-mr-2">Remove experience</BreezeButton>
            </div>

            <div v-for="(result, index) in experience.results" :key="index" class="flex">
                <BreezeInput id="result" type="text" class="mt-2 block w-full" required
                             :value = "experience.results[index]"
                             @input="updateResult(index, $event.target.value)"/>
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
import DateInput from "@/Components/CV/DateInput";
export default {
    name: "Experience.vue",
    components: {
        DateInput,
        BreezeLabel,
        BreezeInput,
        BreezeButton
    },
    props: ['index'],
    computed:{
        experience(){
            const experienceClone = JSON.parse(JSON.stringify(this.$store.getters.cv.experiences[this.index]));
            experienceClone.index = this.index;
            return experienceClone;
        },
        radioButtonName(){
            return `experienceType${this.index}`;
        }
    },
    methods:{
        logItem(data){
            console.log(data)
        },
        updateExperience(key, value){
            // Check if contact has property that's being changed
            if(this.experience.hasOwnProperty(key)){
                this.experience[key] = value;
                this.$store.dispatch('updateExperience', this.experience)
            }
        },
        removeExperience(){
            if (this.index > -1) { // only splice array when item is found
                this.$store.dispatch('removeExperience', this.index);
            }
        },
        addResult(){
            this.experience.results.push('')
            this.$store.dispatch('updateExperience', this.experience)
        },
        updateResult(index, value){
            this.experience.results[index] = value;
            this.$store.dispatch('updateExperience', this.experience)
        },
        removeResult(index){
            if (index > -1) { // only splice array when item is found
                this.experience.results.splice(index, 1); // 2nd parameter means remove one item only
            }
            this.$store.dispatch('updateExperience', this.experience)
        }
    }
}
</script>

<style scoped>

</style>
