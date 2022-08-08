<script setup>
import BreezeButton from "@/Components/Button.vue"
import BreezeInput from "@/Components/Input.vue"
import BreezeLabel from "@/Components/Label.vue"
import SkillInput from "@/Components/Search/SkillInput.vue"
import AgeRangeInput from "@/Components/Search/AgeRangeInput";
</script>

<template>

    <form @submit.prevent="submit">
        <AgeRangeInput></AgeRangeInput>
        <SkillInput></SkillInput>
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
        submit(){
            Inertia.get('/search', this.$store.getters.search);
        }
    }
}
</script>

<style scoped>

</style>
