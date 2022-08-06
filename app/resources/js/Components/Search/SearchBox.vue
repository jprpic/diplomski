<script setup>
import BreezeButton from "@/Components/Button.vue"
import BreezeInput from "@/Components/Input.vue"
import BreezeLabel from "@/Components/Label.vue"
import SkillInput from "@/Components/Search/SkillInput.vue"
</script>

<template>

                    <form @submit.prevent="submit">
                        <SkillInput></SkillInput>
                        <div class="flex mt-2 flex-wrap">
                            <div v-for="(skill, index) in addedSkills" :key="skill.id" class="flex items-center px-2 py-1 bg-white border border-gray-200 rounded-lg m-1">
                                {{ skill.name }}
                                <svg @click="removeSkill(index)" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-2">
                            <BreezeButton class="ml-4" >
                                Search
                            </BreezeButton>
                        </div>
                    </form>

</template>

<script>
import {Inertia} from "@inertiajs/inertia";

export default {
    name: "SearchBox",
    computed:{
        addedSkills(){
            return this.$store.getters.search.skills;
        }
    },
    methods:{
        removeSkill(index){
            this.$store.dispatch('removeSearchSkill', index);
        },
        submit(){
            Inertia.post('/search', this.$store.getters.search);
        }
    }
}
</script>

<style scoped>

</style>
