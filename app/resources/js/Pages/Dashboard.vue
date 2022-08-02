<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';

const props = defineProps({
    user: {
        type: Object,
        required: true
    },
    cv: {
        type: String,
        required: false
    },
})
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                        {{ loadedCV }}
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>

export default{
    computed:{
        loadedCV(){
            return this.$store.getters.cv;
        }

    },
    created(){
        let cv = JSON.parse(this.cv);
        console.log(this.cv)
        for (let [index, experience] of Object.entries(cv.experiences)) {
            console.log(experience);
        }
        this.$store.dispatch('setCV', cv);
    }
}
</script>

