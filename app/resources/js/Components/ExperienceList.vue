<template>
<div>
    <div ref="experiences" class="border border-gray-200 rounded-md shadow-sm">

    </div>
    <BreezeButton class="mt-2" type="button" @click="createExperienceField()" >New Experience</BreezeButton>
</div>
</template>

<script>
import {defineComponent, createApp} from 'vue';
import ExperienceItem from "@/Components/ExperienceItem";
import BreezeButton from './Button.vue';
export default {
    name: "ExperienceList.vue",
    components:{
        BreezeButton
    },
    methods:{
        createExperienceField(){
            // Programmatically add Experience component
            // Append it to experiences div
            let experience = defineComponent({
                extends: ExperienceItem,
            })
            const div = document.createElement('div');
            this.$refs.experiences.appendChild(div);
            createApp(experience ).mount(div)
        }
    }
}
</script>

<style scoped>

</style>
