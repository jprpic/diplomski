<script setup>
import SkillInput from "@/Components/JobAd/SkillInput.vue"
import AgeRangeInput from "@/Components/JobAd/AgeRangeInput";
import LocationInput from "@/Components/JobAd/LocationInput";
</script>

<template>
    <div>
        <AgeRangeInput class="mt-2"></AgeRangeInput>
        <LocationInput :postcodes = "postcodes" class="mt-2"></LocationInput>
        <SkillInput></SkillInput>
    </div>
</template>

<script>
export default {
    name: "SearchBox",
    props: {
        postcodes:{
            required: true
        }
    },
}
</script>

<style scoped>

</style>
