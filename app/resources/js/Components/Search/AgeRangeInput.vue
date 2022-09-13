<script setup>
import BreezeLabel from "@/Components/Label"
import RangeInput from "@/Components/RangeInput"
</script>

<template>
    <div class="flex">
        <div class="w-fit">
            <BreezeLabel for="age_range" value="Age range" />
            <RangeInput :min = "minAge" :max="maxAge" @update:max="value => updateMaxAge(value)" @update:min="value => updateMinAge(value)"/>
        </div>
        <div class="w-fit ml-4">
            <BreezeLabel for="years_of_exp" value="Years of experience range"></BreezeLabel>
            <RangeInput :min = "minExp" :max="maxExp" @update:max="value => updateMaxExp(value)" @update:min="value => updateMinExp(value)"/>
        </div>
    </div>
</template>

<script>
export default {
    name: "AgeRangeInput.vue",
    data(){
        return{
            minAge : 20,
            maxAge : 50,
            minExp : 0,
            maxExp : 5,
        }
    },
    computed:{
      search(){
          return this.$store.getters.search;
        }
    },
    methods:{
        updateMinAge(value){
            this.minAge = value;
            this.$store.dispatch('updateMinAge', this.minAge);
        },
        updateMaxAge(value){
            this.maxAge = value;
            this.$store.dispatch('updateMaxAge', this.maxAge);
        },
        updateMinExp(value){
            this.minExp = value;
            this.$store.dispatch('updateMinExp', this.minExp);
        },
        updateMaxExp(value){
            this.maxExp = value;
            this.$store.dispatch('updateMaxExp', this.maxExp);
        },
    },
    mounted(){
        this.minAge = this.search.minAge;
        this.maxAge = this.search.maxAge;
        this.minExp = this.search.minExp;
        this.maxExp = this.search.maxExp;
    }
}
</script>

<style scoped>

</style>
