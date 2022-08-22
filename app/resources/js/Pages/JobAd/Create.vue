<script setup>
import AuthOrg from '@/Layouts/AuthOrg.vue';
import SearchBox from "@/Components/JobAd/SearchBox";
import { Head } from '@inertiajs/inertia-vue3';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeButton from "@/Components/Button.vue";
import BreezeTextArea from '@/Components/TextArea.vue';
</script>

<template>
    <Head title="Dashboard" />

    <AuthOrg>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Job Ad
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
                                <BreezeLabel for="name" value="Job name" />
                                <BreezeInput id="name" type="text" class="mt-1 block w-full" required autofocus
                                             :value="jobAd.name"
                                             @input="updateName($event.target.value)"   />
                            </div>

                            <div class="mt-2">
                                <BreezeLabel for="job_description" value="Job Description" />
                                <BreezeTextArea id="job_description" rows="5" :value="jobAd.description" @input="updateJobDescription($event.target.value)" />
                            </div>

                            <div class="mt-2">
                                <BreezeLabel for="job_responsibilities" value="Job Responsibilities" />
                                <div v-for="(responsibility, index) in jobAd.responsibilities" :key="index" class="flex">
                                    <BreezeInput id="result" type="text" class="mt-2 block w-full" required
                                                 :value = "jobAd.responsibilities[index]"
                                                 @input="updateResponsibility(index, $event.target.value)"/>
                                    <BreezeButton @click="removeJobResponsibility(index)" type="button" class="ml-2 self-center mt-2">X</BreezeButton>
                                </div>
                                <BreezeButton class="mt-2" type="button" @click="addJobResponsibility()" >Add Responsibility</BreezeButton>
                            </div>

                            <div class="mt-2">
                                <BreezeLabel for="name" value="Candidates Info" />
                                <div class="px-4 py-2 border rounded-md">
                                    <SearchBox :postcodes = "postcodes"></SearchBox>
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-2">
                                <BreezeButton class="ml-4" >
                                    Submit
                                </BreezeButton>
                            </div>
                        </form>
                        {{ jobAd }}
                    </div>
                </div>
            </div>

        </div>
    </AuthOrg>
</template>

<script>
import { toRaw } from 'vue';
import {usePage} from "@inertiajs/inertia-vue3";
import {Inertia} from "@inertiajs/inertia";

export default {
    name: "JobAdCreate.vue",
    props:{
        postcodes: {
            required: true
        },
    },
    computed:{
        successFlash(){
            return toRaw(usePage().props.value.flash.status)
        },
        validErrors(){
            return toRaw(usePage().props.value.errors);
        },
        jobAd(){
            return this.$store.getters.jobAd;
        }
    },
    methods:{
        submit(){
            Inertia.post('/job-ad/', this.$store.getters.jobAd);
        },
        updateName(name){
            this.$store.dispatch('updateJobName', name);
        },
        updateJobDescription(desc){
            this.$store.dispatch('updateJobDescription', desc);
        },
        addJobResponsibility(){
            this.$store.dispatch('addJobResponsibility', '');
        },
        updateResponsibility(index, value){
            const responsibility = {
                value : value,
                index : index
            };
            this.$store.dispatch('updateJobResponsibility', responsibility);
        },
        removeJobResponsibility(index){
            this.$store.dispatch('removeJobResponsibility', index)
        }
    },
    beforeCreate() {
        if(this.$store.getters.jobAd === null){
            this.$store.dispatch('refreshJobAd');
        }
    }
}
</script>
