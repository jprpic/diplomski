<template>
    <div class="py-2 border border-gray-200 rounded-md shadow-sm">
        <div class="ml-4">
            <BreezeLabel for="email" value="E-mail" />
            <BreezeInput id="email" type="email" class="mt-1 block" v-model="email" required autofocus  />
        </div>
        <div v-for="(contact, index) in contacts" :key="index" class="flex items-stretch">
            <ContactItem v-model:type="contact.type" v-model:url="contact.url"/>
            <BreezeButton @click="removeContact(index)" type="button" class="ml-2 h-1/2 self-center mt-8">X</BreezeButton>
        </div>

    </div>
    <BreezeButton class="mt-2" type="button" @click="createContactField()" >Add Contact</BreezeButton>
</template>

<script>
import BreezeButton from './Button.vue';
import ContactItem from "@/Components/ContactItem";
import BreezeLabel from './Label.vue';
import BreezeInput from './Input.vue';
export default {
    name: "ContactList",
    components:{
        ContactItem,
        BreezeButton,
        BreezeLabel,
        BreezeInput
    },
    data(){
        return {
            email: '',
            contacts: [{
                type: '',
                url: ''
            }]
        }
    },
    methods:{
        createContactField() {
            this.contacts.push({
                type: '',
                url: ''
            })
        },
        removeContact(index){
            if (index > -1) { // only splice array when item is found
                this.contacts.splice(index, 1); // 2nd parameter means remove one item only
            }
        }
    }
}
</script>

<style scoped>

</style>
