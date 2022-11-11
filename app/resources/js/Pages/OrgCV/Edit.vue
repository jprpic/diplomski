<script setup>
import AuthOrg from "@/Layouts/AuthOrg.vue";
import AuthAdmin from "@/Layouts/AuthAdmin.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeTextArea from "@/Components/TextArea.vue";
import AddressInput from "@/Components/OrgCV/AddressInput";
import BreezeButton from "@/Components/Button.vue";
import ContactList from "@/Components/OrgCV/ContactList";
import BreezeNavLink from "@/Components/NavLink.vue";
</script>
<template>
    <AuthAdmin>
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
                            <div class="flex flex-row w-full">
                                <div class="w-1/2 mr-2">
                                    <BreezeLabel
                                        for="name"
                                        value="Company name"
                                    />
                                    <BreezeInput
                                        id="name"
                                        type="text"
                                        class="mt-1 block w-full"
                                        required
                                        autofocus
                                        :value="orgCv.name"
                                        @input="updateName($event.target.value)"
                                    />
                                </div>
                                <div class="w-1/2 ml-2">
                                    <BreezeLabel
                                        for="img_url"
                                        value="Company picture url"
                                    />
                                    <BreezeInput
                                        id="img_url"
                                        type="url"
                                        class="mt-1 block w-full"
                                        required
                                        :value="orgCv.img_url"
                                        @input="
                                            updateImgUrl($event.target.value)
                                        "
                                    />
                                </div>
                            </div>

                            <div class="mt-2">
                                <span class="font-medium text-sm text-gray-700"
                                    >Contacts</span
                                >
                                <ContactList />
                            </div>

                            <div class="mt-2">
                                <BreezeLabel
                                    for="description"
                                    value="About us"
                                />
                                <BreezeTextArea
                                    id="description"
                                    rows="5"
                                    :value="orgCv.description"
                                    @input="
                                        updateDescription($event.target.value)
                                    "
                                    required
                                />
                            </div>
                            <AddressInput :postcodes="postcodes"></AddressInput>

                            <div class="flex items-center justify-end mt-4">
                                <BreezeButton class="ml-4">
                                    Submit
                                </BreezeButton>
                            </div>
                        </form>
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
    name: "Edit.vue",
    props: {
        postcodes: {
            type: Array,
            required: true,
        },
        availableContacts: {
            type: Array,
            required: true,
        },
        propOrgCv: {
            type: String,
            required: true,
        },
    },
    computed: {
        validErrors() {
            return toRaw(usePage().props.value.errors);
        },
        successFlash() {
            return toRaw(usePage().props.value.flash.status);
        },
        orgCv() {
            return this.$store.getters.orgCv;
        },
    },
    methods: {
        submit() {
            Inertia.post(`/org-cv/${this.orgCv.id}/edit`, this.orgCv);
        },
        updateName(name) {
            this.$store.dispatch("updateOrgName", name);
        },
        updateEmail(email) {
            this.$store.dispatch("updateOrgEmail", email);
        },
        updateImgUrl(imgUrl) {
            this.$store.dispatch("updateOrgImgUrl", imgUrl);
        },
        updateDescription(description) {
            this.$store.dispatch("updateOrgDescription", description);
        },
    },
    beforeCreate() {
        // If a user wants to access edit but has no CV
        const orgCv = JSON.parse(this.propOrgCv);
        this.$store.dispatch("setOrgCvFromProp", orgCv);
        this.$store.dispatch("setAvailableContacts", this.availableContacts);
    },
    beforeUpdate() {
        const orgCv = JSON.parse(this.propOrgCv);
        this.$store.dispatch("setOrgCvFromProp", orgCv);
    },
};
</script>

<style scoped></style>
