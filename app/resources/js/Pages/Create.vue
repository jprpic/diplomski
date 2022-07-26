<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import {Head, useForm} from '@inertiajs/inertia-vue3';
import BreezeInput from '@/Components/Input.vue';
import BreezeButton from '@/Components/Button.vue';
import BreezeTextArea from '@/Components/TextArea.vue';
import BreezeLabel from '@/Components/Label.vue';
import ExperienceList from "@/Components/ExperienceList";
import ContactList from "@/Components/ContactList";

const props = defineProps({
    user: {
        type: Object,
        required: true
    }
})

const form = useForm({
    name: '',
    job: '',
    description: '',
    address: '',
    references: '',
    experiences: [],
});

const submit = () => {
    form.post(route('create'));
};
</script>

<template>
    <Head title="Create" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">
                            <div>
                                <BreezeLabel for="name" value="First and Last name" />
                                <BreezeInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus  />
                            </div>

                            <div class="mt-2">
                                <BreezeLabel for="job" value="Job position" />
                                <BreezeInput id="job" type="text" class="mt-1 block w-full" v-model="form.job" required />
                            </div>

                            <div>
                                <span class="font-medium text-sm text-gray-700">Contacts</span>
                                <ContactList/>
                            </div>

                            <div class="mt-2">
                                <BreezeLabel for="address" value="Address" />
                                <BreezeInput id="address" type="text" class="mt-1 block w-full" v-model="form.address" required  />
                            </div>

                            <div class="mt-2">
                                <BreezeLabel for="description" value="Profile description" />
                                <BreezeTextArea id="description" rows="3" v-model="form.description" />
                            </div>

                            <div>
                                <span class="font-medium text-sm text-gray-700">Experiences</span>
                                <ExperienceList/>
                            </div>


                            <div class="mt-2">
                                <BreezeLabel for="references" value="References" />
                                <BreezeTextArea id="references" rows="2" v-model="form.references" />
                            </div>


                            <div class="flex items-center justify-end mt-4">
                                <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
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
