<template>
    <div class="flex justify-center items-center my-2">
        <div class="flex-col">
            <BreezeLabel for="month" value="Month" class="text-xs"/>
            <BreezeInput :id="monthId" type="text" class="w-12" placeholder="06" pattern="[0-9]{2}"
                         :value="month"
                         @input="updateMonth($event.target.value)"
                         :onkeyup="updateDate"
                         :required="isRequired"/>

        </div>

        <span class="mx-2 text-xl mt-4">/</span>
        <div>
            <BreezeLabel for="year" value="Year" class="text-xs"/>
            <BreezeInput :id="yearId" type="text" class="w-16" placeholder="2022" pattern="[0-9]{4}"
                         :value="year"
                         @input="updateYear($event.target.value)"
                         :onkeyup="updateDate"
                         :required="isRequired"/>

        </div>

    </div>
</template>

<script>
import BreezeLabel from '../Label.vue';
import BreezeInput from '../Input.vue';

export default {
    name: "DateInput.vue",
    props: ['date', 'id', 'isRequired'],
    emits: ['update:date'],
    data() {
        return {
            month: '',
            year: '',
        }
    },
    computed: {
        monthId() {
            return `${this.id}_month`;
        },
        yearId() {
            return `${this.id}_year`;
        },
    },
    mounted() {
        if (this.date === null) {
            return;
        }
        const date = new Date(this.date);

        this.updateMonth(date.getMonth() + 1);
        this.updateYear(date.getFullYear());
    },
    methods: {
        getLength(number) {
            return number.toString().length;
        },
        updateDate() {
            const month = this.month;
            const year = this.year;
            if (!(isNaN(month) || month <= 0 || month > 12)
                && this.getLength(year) === 4 && !(isNaN(year) || year < 0 || year > new Date().getFullYear())) {
                this.$emit('update:date', new Date(year, parseInt(month) - 1))
            }
        },
        updateMonth(month) {
            month = month.toLocaleString('en-US', {
                minimumIntegerDigits: 2,
                useGrouping: false
            });
            if (!(isNaN(month) || month < 0 || month > 12)) {
                this.month = month;
            }
            // Cancel input if invalid character is entered
            document.getElementById(this.monthId).value = this.month;
        },
        updateYear(year) {
            if (!(isNaN(year) || year < 0 || year > new Date().getFullYear())) {
                this.year = year;
            }
            document.getElementById(this.yearId).value = this.year;
        }
    },
    components: {
        BreezeLabel,
        BreezeInput
    },
}
</script>

<style scoped>

</style>
