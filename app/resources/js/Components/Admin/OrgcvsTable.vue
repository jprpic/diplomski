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
                    <div class="table-cell text-left">Ime</div>
                    <div class="table-cell text-left">Adresa</div>
                    <div class="table-cell text-left w-16">Akcije</div>
                </div>
            </div>
            <div class="table-row-group">
                <div class="table-row" v-for="cv in orgCvs" :key="cv.id">
                    <div class="table-cell text-center py-2">
                        <button
                            type="button"
                            class="bg-transparent text-indigo-600 font-semibold hover:bg-indigo-400 hover:text-white py-1 w-10 border border-indigo-400 rounded"
                            @click="showOrgCV(cv.id)"
                        >
                            {{ cv.id }}
                        </button>
                    </div>
                    <div class="table-cell text-left">{{ cv.name }}</div>
                    <div class="table-cell text-left">
                        {{ cv.location.county }}, {{ cv.location.name }},
                        {{ cv.street }}
                    </div>
                    <div class="table-cell flex-row flex-nowrap space-x-4">
                        <button type="button" @click="EditOrgCv(cv.id)">
                            <img
                                alt="Edit icon"
                                :src="'/images/edit.png'"
                                class="object-contain h-6 w-6"
                            />
                        </button>
                        <button type="button" @click="RemoveOrgCv(cv.id)">
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
    name: "Orgcvs.vue",
    data() {
        return {
            orgCvs: [],
            successFlash: "",
        };
    },
    methods: {
        showOrgCV(id) {
            Inertia.get(`/org-cv/${id}`);
        },
        EditOrgCv(id) {
            Inertia.visit(`/org-cv/${id}/edit`);
        },
        RemoveOrgCv(id) {
            if (
                confirm(
                    "Jeste li sigurni da želite obrisati ovaj 'O nama' tvrtke?"
                )
            ) {
                axios.delete(`/org-cv/${id}`).then((_) => {
                    this.refreshData();
                    this.successFlash = `O nama Id ${id} uspješno obrisan!`;
                });
            }
        },
        refreshData() {
            axios.get("/api/org-cvs").then((response) => {
                this.orgCvs = response.data;
                console.log(this.orgCvs);
            });
        },
    },
    created() {
        this.refreshData();
    },
};
</script>

<style scoped></style>
