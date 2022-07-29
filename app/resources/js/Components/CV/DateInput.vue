<template>
    <div class="flex justify-center items-center my-2">
        <div class="flex-col">
            <BreezeLabel for="month" value="Month" class="text-xs"/>
            <BreezeInput :id="monthId" type="text" class="w-12" required placeholder="06" pattern="[0-9]{2}"
                         :value = this.month
                         @input = "updateMonth($event.target.value)"
                         :onkeyup="monthValidity"/>

        </div>

        <span class="mx-2 text-xl mt-4">/</span>
        <div>
            <BreezeLabel for="year" value="Year" class="text-xs"/>
            <BreezeInput :id="yearId" type="text" class="w-16" required placeholder="2022" pattern="[0-9]{4}"
                         :value = this.year
                         @input = "updateYear($event.target.value)"
                         :onkeyup="yearValidity"/>

        </div>

    </div>
</template>

<script>
import BreezeLabel from '../Label.vue';
import BreezeInput from '../Input.vue';
export default {
    name: "DateInput.vue",
    props: ['month','year','id'],
    emits: ['update:date'],
    computed: {
        monthId(){
            return `${this.id}_month`;
        },
        yearId(){
            return `${this.id}_year`;
        }
    },
    methods:{
        updateMonth(month){
            if(!(isNaN(month) || month < 0 || month > 12)){
                this.$emit('update:date', {
                    month: month,
                    year: this.year
                })
            }
        },
        updateYear(year){
            if(!(isNaN(year) || year < 0 || year > new Date().getFullYear())){
                this.$emit('update:date', {
                    month: this.month,
                    year: year
                })
            }
        },
        monthValidity(){
            document.getElementById(this.monthId).value = this.month;
            if(this.month.toString().length >= 2){
                document.getElementById(this.yearId).focus();
            }
        },
        yearValidity(){
            document.getElementById(this.yearId).value = this.year;
            if(this.year.toString().length >= 4){
                document.getElementById(this.yearId).blur();
            }
        }
    },
    components:{
        BreezeLabel,
        BreezeInput
    },
}
</script>

<style scoped>

</style>
