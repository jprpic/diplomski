<template>
    <div class="flex w-2/3  flex-wrap">
        <div class="flex-none items-stretch ml-4 mt-2">
            <BreezeLabel for="contacts" value="Type" />
            <select name="contacts" id="contacts" required class="mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    :value="contact.contact_id"
                    @input="updateContact('contact_id', $event.target.value)">
                <option disabled value="">Please select one</option>
                <option v-for="contact in availableContacts" :value="contact.id" :key="contact.id"> {{ contact.name }}</option>

            </select>
        </div>
        <div class="grow ml-4 mt-2">
            <BreezeLabel :for="contactInfo.type" :value="contactInfo.label" />
            <BreezeInput :id="contactInfo.type" :type="contactInfo.type" class="mt-1 w-full block" required
                         :value="contact.value"
                         @input="updateContact('value', $event.target.value)"/>
        </div>
    </div>

</template>

<script>
import BreezeLabel from '../Label.vue';
import BreezeInput from '../Input.vue';
import BreezeButton from '../Button.vue';
export default {
    name: "ContactItem",
    components: {
        BreezeLabel,
        BreezeInput,
        BreezeButton
    },
    props: ['index'],
    computed:{
        contact(){
            const contactClone = JSON.parse(JSON.stringify(this.$store.getters.orgCv.contacts[this.index]));
            contactClone.index = this.index;
            return contactClone;
        },
        contactInfo(){
              const contact = this.availableContacts.find( contact => contact.id === parseInt(this.contact.contact_id));
              if(contact){
                  if(contact.name === 'Email'){
                      return { label:'E-mail address', type:'email'};
                  }else if (contact.name === 'Phone'){
                      return { label:'Phone Number', type:'text'};
                  }else{
                      return { label:'URL', type:'url'};
                  }
              }
            return {label:'Value', type:'text'};
        },
        availableContacts(){
            return this.$store.getters.availableContacts;
        }
    },
    methods:{
        updateContact(key, value){
            // Check if contact has property that's being changed
            if(this.contact.hasOwnProperty(key)){
                this.contact[key] = value;
                this.$store.dispatch('updateOrgContact', this.contact)
            }
        }
    }
}
</script>


<style scoped>
</style>
