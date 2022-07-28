<template>
    <div class="py-2 border border-gray-200 rounded-md shadow-sm">
        <div class="ml-4">
            <BreezeLabel for="email" value="E-mail" />
            <BreezeInput id="email" type="email" class="mt-1 block" required autofocus
                         :value = "email"
                         @input="updateEmail($event.target.value)"
            />
        </div>
        <div v-for="(contact, index) in contacts" :key="index" class="flex items-stretch">
            <ContactItem :index = "index" />
            <BreezeButton @click="removeContact(index)" type="button" class="ml-2 h-1/2 self-center mt-8">X</BreezeButton>
        </div>

    </div>
    <BreezeButton class="mt-2" type="button" @click="addContact()" >Add Contact</BreezeButton>
</template>

<script>
import BreezeButton from '../Button.vue';
import ContactItem from "@/Components/CV/ContactItem";
import BreezeLabel from '../Label.vue';
import BreezeInput from '../Input.vue';
export default {
    name: "ContactList",
    components:{
        ContactItem,
        BreezeButton,
        BreezeLabel,
        BreezeInput
    },
    computed:{
        email(){
            return this.$store.getters.cv.email;
        },
        contacts(){
            return this.$store.getters.cv.contacts;
        }
    },
    methods:{
        updateEmail(email){
            this.$store.dispatch('updateEmail', email);
        },
        addContact() {
            this.$store.dispatch('addContact');
        },
        removeContact(index){
            if (index > -1) { // only splice array when item is found
                this.$store.dispatch('removeContact', index);
            }
        }

    }
}
</script>

<style scoped>

</style>
