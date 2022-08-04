<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import {Head, useForm} from '@inertiajs/inertia-vue3';
import BreezeInput from '@/Components/Input.vue';
import BreezeButton from '@/Components/Button.vue';
import BreezeTextArea from '@/Components/TextArea.vue';
import BreezeLabel from '@/Components/Label.vue';
import ExperienceList from "@/Components/CV/ExperienceList";
import ContactList from "@/Components/CV/ContactList";
import SkillList from "@/Components/CV/SkillList";

const props = defineProps({
    availableSkills : {
        type: Array,
        required: true
    }
    ,
    availableContacts : {
        type: Array,
        required: true
    },
    isEdit: {
        type: Boolean,
        required: false
    }
})
</script>

<script>
import { Inertia } from '@inertiajs/inertia';
import {usePage} from "@inertiajs/inertia-vue3";
export default {
    name: "Create",
    computed:{
        CV(){
            return this.$store.getters.cv;
        }
    },
    methods:{
        updateName(name){
            this.$store.dispatch('updateName', name);
        },
        updateDescription(description){
            this.$store.dispatch('updateDescription', description)
        },
        updateAddress(address){
            this.$store.dispatch('updateAddress', address)
        },
        updateJob(job){
            this.$store.dispatch('updateJob', job)
        },
        updateReferences(references){
            this.$store.dispatch('updateReferences', references)
        },
        submit(){
            if(this.isEdit){
                Inertia.post('/cv/edit', this.CV);
            }else{
                Inertia.post('/cv/', this.CV);
            }
        },

    },
    created() {
        // If a user wants to access edit but has no CV
        if(!this.$store.getters.cv.id && this.isEdit){
            Inertia.visit('/cv/create');
        }
        this.$store.dispatch('setAvailableSkills', this.availableSkills)
        this.$store.dispatch('setAvailableContacts', this.availableContacts)
    },
    beforeUpdate() {
        // After sending POST req to edit CV
        // Page will be reloaded and updated lifecycle hook
        // Will be triggered, allowing the store CV to be reloaded
        const cv = this.$store.getters.cv;
        // Creating CV for the first time will update user'\s cv_id.
        if(!cv.id){
            this.$store.dispatch('setUser', usePage().props.value.auth.user)
        }
        // Update CV if it'\s either just created or edited
        if(!cv.id || (cv.id && cv.id !== JSON.parse(usePage().props.value.auth.cv).id)){
            console.log('Updating old CV');
            this.$store.dispatch('setCV', JSON.parse(usePage().props.value.auth.cv));
        }
    }
}
</script>

<template>
    <Head title="Create" />
    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <span v-if="isEdit">Edit</span>
                <span v-else>Create</span>
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">
                            <div>
                                <BreezeLabel for="name" value="First and Last name" />
                                <BreezeInput id="name" type="text" class="mt-1 block w-full" required autofocus
                                             :value="CV.name"
                                             @input="updateName($event.target.value)"   />
                            </div>

                            <div class="mt-2">
                                <BreezeLabel for="description" value="Profile description" />
                                <BreezeTextArea id="description" rows="3" :value="CV.description" @input="updateDescription($event.target.value)" required />
                            </div>

                            <div class="mt-2">
                                <BreezeLabel for="address" value="Address" />
                                <BreezeInput id="address" type="text" class="mt-1 block w-full" :value="CV.address" @input="updateAddress($event.target.value)" required  />
                            </div>

                            <div class="mt-2">
                                <span class="font-medium text-sm text-gray-700">Contacts</span>
                                <ContactList/>
                            </div>

                            <div class="mt-2">
                                <BreezeLabel for="job" value="Job position" />
                                <BreezeInput id="job" type="text" class="mt-1 block w-full" :value="CV.job" @input="updateJob($event.target.value)" required />
                            </div>

                            <div class="mt-2">
                                <span class="font-medium text-sm text-gray-700 pb-2">Experiences</span>
                                <ExperienceList/>
                            </div>

                            <div class="mt-2">
                                <span class="font-medium text-sm text-gray-700 pb-2">Skills</span>
                                <SkillList/>
                            </div>

                            <div class="mt-2">
                                <BreezeLabel for="references" value="References" />
                                <BreezeTextArea id="references" rows="2" :value="CV.references" @input="updateReferences($event.target.value)" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <BreezeButton class="ml-4" >
                                    Submit
                                </BreezeButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
