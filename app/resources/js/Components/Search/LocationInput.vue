<script setup>
import BreezeLabel from "@/Components/Label"
import AutocompleteInput from "@/Components/AutocompleteInput";
</script>

<template>
    <div class="flex flex-wrap">
        <div>
            <BreezeLabel for="county" value="County" />
            <AutocompleteInput id="county_autocomplete" :items = "counties" updateStoreFunction = "updateSearchCounty" class="grow-0 max-h-40">
                <template #item="{ name, index }">
                    <div class="item">
                        <span>{{ name }}</span>
                    </div>
                </template>
            </AutocompleteInput>
        </div>
        <div class="ml-4">
            <BreezeLabel for="city" value="City" />
            <AutocompleteInput id="city_autocomplete" :items = "cities" updateStoreFunction = "updateSearchCity" class="grow-0 max-h-40">
                <template #item="{ name, index }">
                    <div class="item">
                        <span>{{ name }}</span>
                    </div>
                </template>
            </AutocompleteInput>
        </div>
        {{ searchCounty }}
        {{ searchCity }}
    </div>
</template>

<script>
export default {
    name: "LocationInput.vue",
    props:['postcodes'],
    data(){
        return {
            county : '',
            city: ''
        }
    },
    computed:{
        searchCounty(){
            return this.$store.getters.search.county;
        },
        searchCity(){
            return this.$store.getters.search.city;
        },
        counties(){
            // get unique counties
            let counties = this.postcodes.map(function(value) { return value['county']; });
            let unique_counties = [...new Set(counties)];
            return unique_counties.map((v, i) => ({ name: v, index: i }));
        },
        cities(){
            let cityArray = this.postcodes.map(function(value) { return value['name']; });
            return cityArray.map((v, i) => ({ name: v, index: i }));
        },
        searchedCounties(){
            if(this.county === '' || this.counties.find(county => county.name.toLowerCase() === this.county.toLowerCase())){
                return null;
            }
            return this.counties.filter(county => county.name.toLowerCase().startsWith(this.county.toLowerCase()));
        },
        searchedCities(){
            if(this.city === '' || this.cities.find(city => city.name.toLowerCase() === this.city.toLowerCase())){
                return null;
            }
            return this.cities.filter(city => city.name.toLowerCase().startsWith(this.city.toLowerCase()));
        }
    },
    methods:{
        updateSearchCity(index){
            this.$store.dispatch('updateSearchCity', this.cities.find( city => city.index === index).name);
        }
    }
}
</script>

<style scoped>

</style>
