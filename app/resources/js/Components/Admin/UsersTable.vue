<template>
    <div class="table w-full">
        <div class="table-header-group">
            <div class="table-row font-semibold text-lg">
                <div class="table-cell text-center">Id</div>
                <div class="table-cell text-left">Ime i Prezime</div>
                <div class="table-cell text-left">Email</div>
                <div class="table-cell text-left">Rola</div>
                <div class="table-cell text-center">Životopis</div>
                <div class="table-cell text-center">O nama</div>
                <div class="table-cell text-left">Akcije</div>
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
                <div class="table-cell">{{ getRoleName(user.role_id) }}</div>
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
</template>

<script>
import { Inertia } from "@inertiajs/inertia";

export default {
    name: "UsersTable.vue",
    data() {
        return {
            users: [],
        };
    },
    mounted() {
        axios.get("/api/users").then((response) => {
            this.users = response.data;
        });
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
            Inertia.delete(`/user${id}`, {
                onBefore: () =>
                    confirm("Are you sure you want to delete this user?"),
            });
        },
        EditUser(id) {
            Inertia.visit(`/user/${id}/edit`);
        },
    },
};
</script>

<style scoped></style>
