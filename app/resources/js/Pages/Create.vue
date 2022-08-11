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
import AddressInput from "@/Components/CV/AddressInput"
import AgeInput from "@/Components/CV/AgeInput";

const props = defineProps({
    postcodes : {
        type: Array,
        required: true
    },
    availableContacts : {
        type: Array,
        required: true
    }
})
</script>

<script>
import { Inertia } from '@inertiajs/inertia';
import {usePage} from "@inertiajs/inertia-vue3";
import { toRaw } from 'vue';

export default {
    name: "Create",
    computed:{
        CV(){
            return this.$store.getters.cv;
        },
        validErrors(){
            return toRaw(usePage().props.value.errors);
        },
        successFlash(){
            return toRaw(usePage().props.value.flash.status)
        },
        isEdit(){
            return Boolean(usePage().props.value.auth.cv);
        }
    },
    methods:{
        updateName(name){
            this.$store.dispatch('updateName', name);
        },
        updateImgUrl(imgUrl){
          this.$store.dispatch('updateImgUrl', imgUrl);
        },
        updateDescription(description){
            this.$store.dispatch('updateDescription', description)
        },
        updateJob(job){
            this.$store.dispatch('updateJob', job)
        },
        updateSex(value){
            this.$store.dispatch('updateSex', value)
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
    beforeCreate() {
        // If a user wants to access edit but has no CV
        this.$store.dispatch('setAvailableContacts', this.availableContacts)
    },
    beforeUpdate() {
        // After sending POST req to edit CV
        // Page will be reloaded and updated lifecycle hook
        // Will be triggered, allowing the store CV to be reloaded
        const cv = this.$store.getters.cv;
        // Creating CV for the first time will update user'\s cv_id.
        // If there is a validation error, prop CV will remain null
        if(usePage().props.value.auth.cv){
            if(!cv.id){
                this.$store.dispatch('setUser', usePage().props.value.auth.user)
            }
            // Update CV if it'\s either just created or edited
            if(!cv.id || (cv.id && cv.id !== JSON.parse(usePage().props.value.auth.cv).id)){
                this.$store.dispatch('setCV', JSON.parse(usePage().props.value.auth.cv));
            }
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
                        <!-- Error -->
                        <div v-if="Object.keys(this.validErrors).length !== 0" class="p-4 mb-4 text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                            <span v-for="error in validErrors" class="font-medium">{{ error }}</span>
                        </div>
                        <!-- Success Flash -->
                        <div v-if="this.successFlash" class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                            <span class="font-medium">{{ successFlash }}</span>
                        </div>

                        <form @submit.prevent="submit">
                            <div>
                                <BreezeLabel for="name" value="First and Last name" />
                                <BreezeInput id="name" type="text" class="mt-1 block w-full" required autofocus
                                             :value="CV.name"
                                             @input="updateName($event.target.value)"   />
                            </div>

                            <div class="flex w-full flex-wrap">
                                <div class="mt-6">
                                    <BreezeLabel for="sex" value="Sex" />
                                    <select name="sex" id="sex" required class="mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                            :value="CV.sex"
                                            @input="updateSex($event.target.value)">
                                        <option disabled value="">Please select one</option>
                                        <option value="M"> Male </option>
                                        <option value="F"> Female </option>
                                    </select>
                                </div>
                                <AgeInput></AgeInput>
                                <div class="mt-6 ml-4 w-1/3">
                                    <BreezeLabel for="img_url" value="Profile picture URL" />
                                    <BreezeInput id="img_url" type="url" class="mt-1 w-full" required
                                                 :value="CV.img_url"
                                                 @input="updateImgUrl($event.target.value)"   />
                                </div>
                            </div>


                            <AddressInput :postcodes="postcodes"></AddressInput>

                            <div class="mt-2">
                                <BreezeLabel for="description" value="Profile description" />
                                <BreezeTextArea id="description" rows="3" :value="CV.description" @input="updateDescription($event.target.value)" required />
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
