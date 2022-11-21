<script setup>
import SearchItem from "@/Components/Search/SearchItem";
</script>

<template>
    <div class="flex flex-col" v-if="data.length">
        <div
            class="flex justify-around items-center"
            v-for="target in data"
            :key="target.user.id"
        >
            <div class="grow"></div>
            <div class="grow mr-4 mt-2">
                <button
                    class="w-full"
                    type="button"
                    @click="showCV(target.user.id)"
                >
                    <SearchItem
                        :target="target.user"
                        :searchedSkills="searchedSkills"
                    ></SearchItem>
                </button>
            </div>

            <div class="flex flex-row space-x-4 ml-2 px-4">
                <button
                    type="button"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:shadow-outline-gray transition ease-in-out duration-150"
                    @click="
                        sendResponse(
                            data.indexOf(target),
                            target.user.user_id,
                            false
                        )
                    "
                    :class="
                        getDenyButtonClass(
                            target.application.status === 'denied'
                        )
                    "
                >
                    Odbij
                </button>
                <button
                    type="button"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:shadow-outline-gray transition ease-in-out duration-150"
                    @click="
                        sendResponse(
                            data.indexOf(target),
                            target.user.user_id,
                            true
                        )
                    "
                    :class="
                        getAcceptButtonClass(
                            target.application.status === 'accepted'
                        )
                    "
                >
                    Primi
                </button>
            </div>
        </div>
    </div>
    <div class="flex justify-center w-full" v-else-if="!data.length">
        <p class="text-lg font-semibold">
            Nažalost, nemate prijavnika na ovom oglasu!
        </p>
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import axios from "axios";
export default {
    name: "ApplicantsList.vue",
    props: {
        searchedSkills: {
            required: true,
        },
        jobAd: {
            required: true,
        },
    },
    data() {
        return {
            data: [],
        };
    },
    methods: {
        showCV(id) {
            Inertia.get(`/cv/${id}`);
        },
        getData() {
            axios.get(`/api/application/${this.jobAd.id}`).then((response) => {
                this.data = response.data;
                console.log(this.data);
            });
        },
        sendResponse(btnId, user_id, response) {
            const model = {
                user_id: user_id,
                job_id: this.jobAd.id,
                response: response,
            };
            axios.post(`/application/response`, model).then((res) => {
                this.data[btnId].application.status = res.data.status;
                console.log(res);
            });
        },
        getDenyButtonClass(response) {
            return response
                ? "bg-red-600 hover:bg-red-500 active:bg-red-700 focus:border-red-700"
                : "bg-red-400 hover:bg-red-300 active:bg-red-500 focus:border-red-500";
        },
        getAcceptButtonClass(response) {
            return response
                ? "bg-green-600 hover:bg-green-500 active:bg-green-700 focus:border-green-700"
                : "bg-green-400 hover:bg-green-300 active:bg-green-500 focus:border-green-500";
        },
    },
    mounted() {
        this.getData();
    },
};
</script>

<style scoped></style>
