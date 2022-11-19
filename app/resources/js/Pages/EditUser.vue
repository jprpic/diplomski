<script setup>
import SearchBox from "@/Components/JobAd/SearchBox";
import AuthAdmin from "@/Layouts/AuthAdmin.vue";
import { Head } from "@inertiajs/inertia-vue3";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeButton from "@/Components/Button.vue";
import BreezeTextArea from "@/Components/TextArea.vue";
</script>

<template>
    <Head title="Dashboard" />

    <AuthAdmin>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Uredi Korisnika
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Error -->
                        <div
                            v-if="Object.keys(this.validErrors).length !== 0"
                            class="p-4 mb-4 text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert"
                        >
                            <span
                                v-for="error in validErrors"
                                class="font-medium"
                                :key="error"
                                >{{ error }}</span
                            >
                        </div>
                        <!-- Success Flash -->
                        <div
                            v-if="this.successFlash"
                            class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                            role="alert"
                        >
                            <span class="font-medium">{{ successFlash }}</span>
                        </div>
                        <form @submit.prevent="submit">
                            <div>
                                <BreezeLabel for="name" value="Ime i prezime" />
                                <BreezeInput
                                    id="name"
                                    type="text"
                                    class="mt-1 block w-1/2"
                                    required
                                    autofocus
                                    v-model="user.name"
                                />
                            </div>

                            <div class="mt-2 w-full">
                                <BreezeLabel for="email" value="Email" />
                                <div class="flex flex-row">
                                    <div class="w-1/2">
                                        <BreezeInput
                                            id="email"
                                            type="email"
                                            class="mt-1 w-full"
                                            required
                                            v-model="user.email"
                                        />
                                    </div>
                                    <div class="flex items-center ml-2">
                                        <div>
                                            <label>
                                                <input
                                                    type="checkbox"
                                                    style="
                                                        color: rgb(99 102 241);
                                                    "
                                                    :checked="
                                                        user.email_verified_at
                                                    "
                                                    @input="
                                                        updateEmailVerification()
                                                    "
                                                />
                                                Potvrđen
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label for="cars" class="mr-2"
                                    >Rola korisnika:</label
                                >
                                <select
                                    name="cars"
                                    id="cars"
                                    v-model="user.role_id"
                                >
                                    <option value="1">Korisnik</option>
                                    <option value="2">Tvrtka</option>
                                    <option value="3">Administrator</option>
                                </select>
                            </div>
                            <div class="flex items-center justify-end mt-2">
                                <BreezeButton class="ml-4">
                                    Submit
                                </BreezeButton>
                            </div>
                        </form>
                        <div class="flex flex-col">
                            <div v-if="user.cv_id">
                                Životopis Id: {{ user.cv_id }}
                            </div>
                            <div v-if="user.org_c_v_s_id">
                                O nama Id: {{ user.org_c_v_s_id }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthAdmin>
</template>

<script>
import { toRaw } from "vue";
import { usePage } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
export default {
    name: "EditUser.vue",
    props: {
        propUser: {
            type: String,
            required: true,
        },
    },
    computed: {
        successFlash() {
            return toRaw(usePage().props.value.flash.status);
        },
        validErrors() {
            return toRaw(usePage().props.value.errors);
        },
        user() {
            return this.$store.getters.editUser;
        },
    },
    methods: {
        updateEmailVerification() {
            this.user.email_verified_at = this.user.email_verified_at
                ? null
                : new Date(Date.now());
        },
        submit() {
            Inertia.post(`/user/${this.user.id}/edit`, this.user);
        },
    },
    created() {
        const editUser = JSON.parse(this.propUser);
        this.$store.dispatch("setEditUser", editUser);
    },
};
</script>

<style scoped></style>
