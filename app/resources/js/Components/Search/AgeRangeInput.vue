<script setup>
import BreezeLabel from "@/Components/Label"
import BreezeInput from "@/Components/Input"
import RangeInput from "@/Components/Search/RangeInput"
</script>

<template>
    <div class="flex">
        <div class="w-fit">
            <BreezeLabel for="age_range" value="Age range" />
            <RangeInput :value="ageRange" @update:top="value => updateTop(value)" @update:bot="value => updateBot(value)"/>
        </div>
        <div class="w-fit ml-4">
            <BreezeLabel for="years_of_exp" value="Years of experience range"></BreezeLabel>
            <RangeInput :value="expRange" @update:top="value => updateExpTop(value)" @update:bot="value => updateExpBot(value)"/>
        </div>
    </div>
</template>

<script>
export default {
    name: "AgeRangeInput.vue",
    computed:{
        ageRange(){
            return this.$store.getters.search.ageRange;
        },
        expRange(){
            return this.$store.getters.search.expRange;
        }
    },
    methods:{
        updateBot(value){
            this.ageRange.bot = value;
            this.updateAgeRange();
        },
        updateTop(value){
            this.ageRange.top = value;
            this.updateAgeRange();
        },
        updateAgeRange(){
            this.$store.dispatch('updateAgeRange', this.ageRange);
        },
        updateExpBot(value){
            this.expRange.bot = value;
            this.updateExpRange();
        },
        updateExpTop(value){
            this.expRange.top = value;
            this.updateExpRange();
        },
        updateExpRange(){
            this.$store.dispatch('updateExpRange', this.expRange);
        }
    }
}
</script>

<style scoped>

</style>
