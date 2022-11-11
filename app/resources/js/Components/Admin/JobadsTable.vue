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
                    <div class="table-cell text-left">Tvrtka</div>
                    <div class="table-cell text-left">Posao</div>
                    <div class="table-cell text-center w-16">Dob</div>
                    <div class="table-cell text-center">Godine Iskustva</div>
                    <div class="table-cell text-left">Županija</div>
                    <div class="table-cell text-left w-16">Akcije</div>
                </div>
            </div>
            <div class="table-row-group">
                <div class="table-row" v-for="ad in jobAds" :key="ad.id">
                    <div class="table-cell text-center py-2">
                        <button
                            type="button"
                            class="bg-transparent text-indigo-600 font-semibold hover:bg-indigo-400 hover:text-white py-1 w-10 border border-indigo-400 rounded"
                            @click="showAd(ad.id)"
                        >
                            {{ ad.id }}
                        </button>
                    </div>
                    <div class="table-cell">{{ ad.org_cv.name }}</div>
                    <div class="table-cell">{{ ad.name }}</div>
                    <div class="table-cell text-center">
                        {{ ad.minAge }} - {{ ad.maxAge }}
                    </div>
                    <div class="table-cell text-center">
                        {{ ad.minExp }} - {{ ad.maxExp }}
                    </div>
                    <div class="table-cell">{{ ad.county }}</div>
                    <div class="table-cell flex-row flex-nowrap space-x-4">
                        <button type="button" @click="EditAd(ad.id)">
                            <img
                                alt="Edit icon"
                                :src="'/images/edit.png'"
                                class="object-contain h-6 w-6"
                            />
                        </button>
                        <button type="button" @click="RemoveAd(ad.id)">
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
    name: "Jobads.vue",
    data() {
        return {
            jobAds: [],
            successFlash: "",
        };
    },
    methods: {
        showAd(id) {
            Inertia.get(`/job-ad/${id}/details`);
        },
        EditAd(id) {
            Inertia.get(`/admin/job-ad/${id}/edit`);
        },
        RemoveAd(id) {
            if (confirm("Jeste li sigurni da želite obrisati ovaj oglas?")) {
                axios.delete(`/admin/job-ad/${id}`).then((_) => {
                    this.refreshData();
                    this.successFlash = `Oglas za posao Id ${id} uspješno obrisan!`;
                });
            }
        },
        refreshData() {
            axios.get("/api/job-ads").then((response) => {
                this.jobAds = response.data;
                console.log(this.jobAds);
            });
        },
    },
    created() {
        this.refreshData();
    },
};
</script>

<style scoped></style>
