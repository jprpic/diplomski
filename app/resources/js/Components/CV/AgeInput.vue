<script setup>
import BreezeLabel from "@/Components/Label";
import BreezeInput from "@/Components/Input";
import DateInput from "@/Components/CV/DateInput";

</script>

<template>
    <div class="mt-2 ml-1 flex">
        <div class="ml-4">
            <BreezeLabel for="birth_date" value="Date of birth"/>
            <DateInput  id="`birth_date`" :isRequired="true"
                       :date = "CV.birthdate"
                       @update:date="(date) => updateBirthdate(date)"/>
        </div>

        <div class="ml-4 mt-4">
            <BreezeLabel for="years_of_exp" value="Years of experience"/>
            <BreezeInput id="years_of_exp" type="number" min="0" max="50" class="mt-1 block" required
                         :value = "CV.years_of_exp"
                         @input="updateYearsOfExp($event.target.value)"/>
        </div>

    </div>
</template>

<script>
export default {
    name: "AgeInput.vue",
    computed:{
        CV(){
            return this.$store.getters.cv;
        }
    },
    methods:{
        updateBirthdate(date){
            console.log(date);
            this.$store.dispatch('updateBirthdate', date);
        },
        updateYearsOfExp(value){
            this.$store.dispatch('updateYearsOfExp', value);
        }
    }
}
</script>

<style scoped>

</style>
