<script setup>
import BreezeLabel from "@/Components/Label";
import AutocompleteInput from "@/Components/AutocompleteInput";
</script>

<template>
    <div class="flex flex-wrap">
        <div>
            <BreezeLabel for="county" value="Županija" />
            <AutocompleteInput
                id="county_autocomplete"
                :items="counties"
                updateStoreFunction="updateSearchCounty"
                :initVal="searchCounty"
                class="grow-0 max-h-40"
            >
                <template #item="{ name, index }">
                    <div class="item">
                        <span>{{ name }}</span>
                    </div>
                </template>
            </AutocompleteInput>
        </div>
        <div class="ml-4">
            <BreezeLabel for="city" value="Grad" />
            <AutocompleteInput
                id="city_autocomplete"
                :items="cities"
                updateStoreFunction="updateSearchCity"
                :initVal="searchCity"
                class="grow-0 max-h-40"
            >
                <template #item="{ name, index }">
                    <div class="item">
                        <span>{{ name }}</span>
                    </div>
                </template>
            </AutocompleteInput>
        </div>
    </div>
</template>

<script>
export default {
    name: "LocationInput.vue",
    props: ["postcodes"],
    computed: {
        searchCounty() {
            return this.$store.getters.search.county;
        },
        searchCity() {
            return this.$store.getters.search.city;
        },
        counties() {
            // get unique counties
            let counties = this.postcodes.map(function (value) {
                return value["county"];
            });
            let unique_counties = [...new Set(counties)];
            return unique_counties.map((v, i) => ({ name: v, index: i }));
        },
        cities() {
            if (!this.searchCounty) {
                const cityArray = this.postcodes.map(function (value) {
                    return value["name"];
                });
                let unique_cities = [...new Set(cityArray)];
                return unique_cities.map((v, i) => ({ name: v, index: i }));
            } else {
                let countyCities = this.postcodes.filter(
                    (el) => el.county === this.searchCounty
                );
                countyCities = countyCities.map(function (value) {
                    return value["name"];
                });
                let unique_cities = [...new Set(countyCities)];
                return [
                    ...new Set(
                        unique_cities.map((v, i) => ({ name: v, index: i }))
                    ),
                ];
            }
        },
    },
};
</script>

<style scoped></style>
