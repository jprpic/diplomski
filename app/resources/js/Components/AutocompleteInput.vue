<script setup>
import BreezeInput from "@/Components/Input.vue"
</script>

<template>
    <div>
        <BreezeInput type="text" class="mt-1 block" placeholder="optional"
                     :value="input" @input="updateInput($event.target.value)"/>
        <div v-if="searchedItems && searchedItems.length > 0" class="overflow-auto max-h-40 px-4 pt-2 border border-gray-200 rounded-md shadow-sm">
            <p class="my-1" v-for="item in searchedItems" :key="item.index">
                <button type="button" @click="updateInput(item.name)" >
                    <slot name="item" v-bind="item"/>
                </button>
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: "Autocomplete.vue",
    props:['items', 'updateStoreFunction'],
    emits:['btnClick'],
    data(){
        return {
            input: ''
        }
    },
    computed:{
        searchedItems(){
            if(this.input === '' || this.items.find(item => item.name.toString().toLowerCase() === this.input.toLowerCase())){
                return null;
            }
            return this.items.filter(item => item.name.toString().toLowerCase().startsWith(this.input.toLowerCase()));
        }
    },
    methods:{
        updateInput(value){
          this.input = value;
          if(this.input === ''){
              this.$store.dispatch(`${this.updateStoreFunction}`, '');
          }
          const item = this.items.find(item => item.name.toLowerCase() === this.input.toLowerCase());
          if(item){
              this.updateStore(item.index);
          }
        },
        updateStore(index){
            this.$store.dispatch(`${this.updateStoreFunction}`, this.items.find( item => item.index === index).name);
        },
    }
}
</script>

<style scoped>

</style>
