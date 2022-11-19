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
                    <div class="table-cell text-left">Korisnik ID</div>
                    <div class="table-cell text-left">Korisnik</div>
                    <div class="table-cell text-left">Posao ID</div>
                    <div class="table-cell text-left">Posao</div>
                    <div class="table-cell text-center w-16">Akcije</div>
                </div>
            </div>
            <div class="table-row-group">
                <div
                    class="table-row"
                    v-for="application in applications"
                    :key="application.created_at"
                >
                    <div class="table-cell text-left py-2">
                        {{ application.user_id }}
                    </div>
                    <div class="table-cell text-left py-2">
                        {{ application.user.name }}
                    </div>
                    <div class="table-cell text-left">
                        {{ application.job_id }}
                    </div>
                    <div class="table-cell text-left">
                        {{ application.job_ad.name }}
                    </div>
                    <div class="table-cell text-center">
                        <button
                            type="button"
                            @click="
                                RemoveApplication(
                                    application.user_id,
                                    application.job_id
                                )
                            "
                        >
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
import axios from "axios";

export default {
    name: "ApplicationsTable.vue",
    data() {
        return {
            applications: [],
            successFlash: "",
        };
    },
    methods: {
        RemoveApplication(user_id, job_id) {
            if (
                confirm(
                    "Jeste li sigurni da želite obrisati ovu prijavu na posao?"
                )
            ) {
                axios
                    .post(`/application`, {
                        job_id: job_id,
                        user_id: user_id,
                    })
                    .then((response) => {
                        this.refreshData();
                        this.successFlash = `Prijava Korisnika ID ${user_id} na Oglas za posao ${job_id} uspješno obrisan!`;
                    })
                    .catch((error) => {});
            }
        },
        refreshData() {
            axios.get("/api/application").then((response) => {
                this.applications = response.data;
            });
        },
    },
    created() {
        this.refreshData();
    },
};
</script>

<style scoped></style>
