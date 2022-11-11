<template>
    <div class="flex flex-col w-full">
        <!-- Success Flash -->
        <div
            v-if="this.successFlash"
            class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
            role="alert"
        >
            <span class="font-medium">{{ successFlash }}</span>
        </div>
        <div class="table w-full">
            <div class="table-header-group">
                <div class="table-row font-semibold text-lg">
                    <div class="table-cell text-center">Id</div>
                    <div class="table-cell text-left">Ime i Prezime</div>
                    <div class="table-cell text-left">Email</div>
                    <div class="table-cell text-left">Rola</div>
                    <div class="table-cell text-center">Životopis</div>
                    <div class="table-cell text-center">O nama</div>
                    <div class="table-cell text-left w-16">Akcije</div>
                </div>
            </div>
            <div class="table-row-group">
                <div class="table-row" v-for="user in users" :key="user.id">
                    <div class="table-cell py-2 text-center">{{ user.id }}</div>
                    <div class="table-cell">{{ user.name }}</div>
                    <div
                        class="table-cell"
                        :class="
                            user.email_verified_at
                                ? 'text-green-500'
                                : 'text-red-500'
                        "
                    >
                        {{ user.email }}
                    </div>
                    <div class="table-cell">
                        {{ getRoleName(user.role_id) }}
                    </div>
                    <div class="table-cell text-center">
                        <button
                            v-if="user.cv_id"
                            type="button"
                            class="bg-transparent text-indigo-600 font-semibold hover:bg-indigo-400 hover:text-white py-1 w-10 border border-indigo-400 rounded"
                            @click="showCV(user.cv_id)"
                        >
                            {{ user.cv_id }}
                        </button>
                    </div>
                    <div class="table-cell text-center">
                        <button
                            v-if="user.org_c_v_s_id"
                            class="bg-transparent text-indigo-600 font-semibold hover:bg-indigo-400 hover:text-white py-1 w-10 border border-indigo-400 rounded"
                            @click="showOrgCV(user.org_c_v_s_id)"
                        >
                            {{ user.org_c_v_s_id }}
                        </button>
                    </div>
                    <div class="table-cell flex-row flex-nowrap space-x-4">
                        <button type="button" @click="EditUser(user.id)">
                            <img
                                alt="Edit icon"
                                :src="'/images/edit.png'"
                                class="object-contain h-6 w-6"
                            />
                        </button>
                        <button type="button" @click="RemoveUser(user.id)">
                            <img
                                alt="Delete icon"
                                :src="'/images/delete.png'"
                                class="object-contain h-6 w-6"
                            />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";

export default {
    name: "UsersTable.vue",
    data() {
        return {
            users: [],
            successFlash: "",
        };
    },
    methods: {
        getRoleName(role_id) {
            switch (role_id) {
                case 1:
                    return "Korisnik";
                case 2:
                    return "Tvrtka";
                case 3:
                    return "Administrator";
            }
        },
        showCV(id) {
            Inertia.get(`/cv/${id}`);
        },
        showOrgCV(id) {
            Inertia.get(`/org-cv/${id}`);
        },
        RemoveUser(id) {
            if (
                confirm("Jeste li sigurni da želite obrisati ovog korisnika?")
            ) {
                axios.delete(`/user/${id}`).then((_) => {
                    this.refreshData();
                    this.successFlash = `Korisnik Id ${id} uspješno obrisan!`;
                });
            }
        },
        EditUser(id) {
            Inertia.visit(`/user/${id}/edit`);
        },
        refreshData() {
            axios.get("/api/users").then((response) => {
                this.users = response.data;
            });
        },
    },
    beforeMount() {
        this.refreshData();
    },
};
</script>

<style scoped></style>
