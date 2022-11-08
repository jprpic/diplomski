<template>
    <div class="table w-full">
        <div class="table-header-group">
            <div class="table-row font-semibold text-lg">
                <div class="table-cell text-center">Id</div>
                <div class="table-cell text-left">Tvrtka</div>
                <div class="table-cell text-left">Posao</div>
                <div class="table-cell text-center">Dob</div>
                <div class="table-cell text-center">Godine Iskustva</div>
                <div class="table-cell text-left">Županija</div>
                <div class="table-cell text-left">Akcije</div>
            </div>
        </div>
        <div class="table-row-group">
            <div class="table-row" v-for="ad in jobAds" :key="ad.id">
                <div class="table-cell text-center py-2"><button
                    type="button"
                    class="bg-transparent text-indigo-600 font-semibold hover:bg-indigo-400 hover:text-white py-1 w-10 border border-indigo-400 rounded"
                    @click="showAd(ad.id)"
                >
                    {{ ad.id }}
                </button></div>
                <div class="table-cell">{{ ad.org_cv.name }}</div>
                <div class="table-cell">{{ ad.name }}</div>
                <div class="table-cell text-center">{{ ad.minAge }} - {{ ad.maxAge }}</div>
                <div class="table-cell text-center">{{ ad.minExp }} - {{ ad.maxExp }}</div>
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
</template>

<script>
import { Inertia } from "@inertiajs/inertia";

export default {
    name: "Jobads.vue",
    data() {
        return {
            jobAds: [],
        };
    },
    methods: {
        showAd(id) {
            Inertia.get(`/job-ad/${id}/details`);
        },
        EditAd(){
            return;
        },
        RemoveAd(){
            return;
        }
    },
    mounted() {
        axios.get("/api/job-ads").then((response) => {
            this.jobAds = response.data;
            console.log(this.jobAds);
        });
    },
};
</script>

<style scoped></style>
