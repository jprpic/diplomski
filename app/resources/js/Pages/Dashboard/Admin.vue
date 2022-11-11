<script setup>
import AuthAdmin from "@/Layouts/AuthAdmin";
import { Head } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthAdmin>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Administracija
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex flex-row space-x-2 justify-center">
                            <div>
                                <button
                                    class="bg-transparent text-indigo-600 font-semibold hover:bg-indigo-400 hover:text-white py-2 px-4 border border-indigo-400 rounded"
                                    :class="activeClass('users')"
                                    type="button"
                                    @click="setCategory('users')"
                                >
                                    Korisnici
                                </button>
                            </div>
                            <div>
                                <button
                                    class="bg-transparent text-indigo-600 font-semibold hover:bg-indigo-400 hover:text-white py-2 px-4 border border-indigo-400 rounded"
                                    :class="activeClass('cvs')"
                                    type="button"
                                    @click="setCategory('cvs')"
                                >
                                    Životopisi
                                </button>
                            </div>
                            <div>
                                <button
                                    class="bg-transparent text-indigo-600 font-semibold hover:bg-indigo-400 hover:text-white py-2 px-4 border border-indigo-400 rounded"
                                    :class="activeClass('Orgcvs')"
                                    type="button"
                                    @click="setCategory('Orgcvs')"
                                >
                                    Tvrtke
                                </button>
                            </div>
                            <div>
                                <button
                                    class="bg-transparent text-indigo-600 font-semibold hover:bg-indigo-400 hover:text-white py-2 px-4 border border-indigo-400 rounded"
                                    :class="activeClass('Jobads')"
                                    type="button"
                                    @click="setCategory('Jobads')"
                                >
                                    Oglasi za posao
                                </button>
                            </div>
                        </div>
                        <div class="flex mt-4 justify-center">
                            <component v-bind:is="datatable"> </component>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthAdmin>
</template>

<script>
import UsersTable from "@/Components/Admin/UsersTable";
import CvsTable from "@/Components/Admin/CvsTable";
import JobadsTable from "@/Components/Admin/JobadsTable";
import OrgcvsTable from "@/Components/Admin/OrgcvsTable";

export default {
    name: "DashboardAdmin.vue",
    components: {
        UsersTable,
        CvsTable,
        JobadsTable,
        OrgcvsTable,
    },
    data() {
        return {
            category: "users",
        };
    },
    methods: {
        activeClass(category) {
            return this.category === category ? "border-b-4" : "";
        },
        setCategory(category) {
            this.category = category;
        },
    },
    computed: {
        datatable() {
            return `${this.category}-table`;
        },
    },
};
</script>

<style scoped></style>
