<script setup>
import BreezeLabel from "@/Components/Label";
import RangeInput from "@/Components/RangeInput";
</script>

<template>
    <div class="flex">
        <div class="w-fit">
            <BreezeLabel for="age_range" value="Godine" />
            <RangeInput
                :min="minAge"
                :max="maxAge"
                @update:max="(value) => updateMaxAge(value)"
                @update:min="(value) => updateMinAge(value)"
            />
        </div>
        <div class="w-fit ml-4">
            <BreezeLabel
                for="years_of_exp"
                value="Godine iskustva"
            ></BreezeLabel>
            <RangeInput
                :min="minExp"
                :max="maxExp"
                @update:max="(value) => updateMaxExp(value)"
                @update:min="(value) => updateMinExp(value)"
            />
        </div>
    </div>
</template>

<script>
export default {
    name: "AgeRangeInput.vue",
    data() {
        return {
            minAge: 20,
            maxAge: 50,
            minExp: 0,
            maxExp: 5,
        };
    },
    computed: {
        jobAd() {
            return this.$store.getters.jobAd;
        },
    },
    methods: {
        updateMinAge(value) {
            this.minAge = value;
            this.$store.dispatch("updateJobMinAge", this.minAge);
        },
        updateMaxAge(value) {
            this.maxAge = value;
            this.$store.dispatch("updateJobMaxAge", this.maxAge);
        },
        updateMinExp(value) {
            this.minExp = value;
            this.$store.dispatch("updateJobMinExp", this.minExp);
        },
        updateMaxExp(value) {
            this.maxExp = value;
            this.$store.dispatch("updateJobMaxExp", this.maxExp);
        },
    },
    mounted() {
        this.minAge = this.jobAd.minAge;
        this.maxAge = this.jobAd.maxAge;
        this.minExp = this.jobAd.minExp;
        this.maxExp = this.jobAd.maxExp;
    },
};
</script>

<style scoped></style>
