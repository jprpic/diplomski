<script setup>
import JobAd from "@/Components/JobAd/Item.vue";
</script>

<template>
    <component v-bind:is="layout">
        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8" style="max-width: 80rem">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- About Us -->
                        <div
                            class="flex flex-col border border-gray-200 rounded-md shadow-md bg-gray-50 p-4"
                        >
                            <div class="mb-4 flex flex-row items-center">
                                <!-- Org Image -->
                                <div class="min-w-fit mt-2">
                                    <img
                                        :src="orgCv.img_url"
                                        alt="Company image"
                                        class="object-contain max-h-24"
                                    />
                                </div>
                                <!-- Description -->
                                <div
                                    class="ml-4 text-gray-800 p-4 border-x border-gray-500/25 text-justify grow"
                                >
                                    <p class="text-2xl font-bold uppercase">
                                        {{ orgCv.name }}
                                    </p>
                                    <p>
                                        {{ orgCv.description }}
                                    </p>
                                </div>
                                <!-- Contacts -->
                                <div class="p-4 flex flex-col">
                                    <div
                                        class="flex flex-row items-center my-1"
                                    >
                                        <img
                                            :src="'/images/location.png'"
                                            alt="contact icon"
                                            class="object-contain h-6 w-6"
                                        />
                                        <span class="ml-2">
                                            {{ orgCv.location.name }},
                                            {{ orgCv.street }}
                                        </span>
                                    </div>
                                    <div
                                        class="flex flex-row items-center my-1"
                                        v-for="contact in orgCv.contacts"
                                        :key="contact.contact_id"
                                    >
                                        <img
                                            :src="getImgUrl(contact)"
                                            alt="contact icon"
                                            class="object-contain h-6 w-6"
                                        />
                                        <span class="ml-2">{{
                                            contact.value
                                        }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Job Ads -->
                        <div
                            class="flex flex-col border border-gray-200 rounded-md shadow-md p-4 mt-4"
                        >
                            <div class="flex flex-row items-center my-1">
                                <img
                                    :src="'/images/jobAd.png'"
                                    alt="contact icon"
                                    class="object-contain h-10 w-10"
                                />
                                <span class="ml-2 text-xl font-bold"
                                    >Open positions
                                </span>
                            </div>
                            <div v-for="ad in orgCv.job_ads" :key="ad.id">
                                <button
                                    class="w-full"
                                    type="button"
                                    @click="showAd(ad.id)"
                                >
                                    <JobAd :jobAd="ad"></JobAd>
                                </button>
                            </div>
                        </div>
                        <!-- {{ orgCv }} -->
                    </div>
                </div>
            </div>
        </div>
    </component>
</template>

<script>
import { usePage } from "@inertiajs/inertia-vue3";
import AuthUser from "@/Layouts/AuthUser";
import AuthOrg from "@/Layouts/AuthOrg";
import Empty from "@/Layouts/Empty.vue";
import { Inertia } from "@inertiajs/inertia";
import AuthAdmin from "@/Layouts/AuthAdmin";
export default {
    components: {
        AuthUser,
        AuthOrg,
        AuthAdmin,
        Empty,
    },
    props: {
        orgCv: {
            required: true,
        },
    },
    name: "Show.vue",
    computed: {
        layout() {
            if (!usePage().props.value.auth.user) {
                return "empty";
            }
            const role_id = usePage().props.value.auth.user.role_id;
            if (role_id === 1) {
                return "auth-user";
            } else if (role_id === 2) {
                return "auth-org";
            } else if( role_id === 3) {
                return 'auth-admin';
            }
        },
    },
    methods: {
        getContactName(contact_id) {
            return this.orgCv.contact_info.find(
                (contact) => contact.id === contact_id
            ).name;
        },
        getImgUrl(contact_id) {
            return `/images/${this.getContactName(
                contact_id.contact_id
            ).toLowerCase()}.png`;
        },
        showAd(id) {
            Inertia.visit(`/job-ad/${id}/details`);
        },
    },
};
</script>

<style scoped></style>
