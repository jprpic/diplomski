<template>
    <div class="table w-full">
        <div class="table-header-group">
            <div class="table-row font-semibold text-lg">
                <div class="table-cell text-center">Id</div>
                <div class="table-cell text-center">Id Korisnika</div>
                <div class="table-cell text-left">Ime i Prezime</div>
                <div class="table-cell text-left">Traženi Posao</div>
                <div class="table-cell text-center">Spol</div>
                <div class="table-cell text-center">Godine Iskustva</div>
                <div class="table-cell text-left">Akcije</div>
            </div>
        </div>
        <div class="table-row-group">
            <div class="table-row" v-for="cv in cvs" :key="cv.id">
                <div class="table-cell text-center py-2"><button
                    type="button"
                    class="bg-transparent text-indigo-600 font-semibold hover:bg-indigo-400 hover:text-white py-1 w-10 border border-indigo-400 rounded"
                    @click="showCV(cv.id)"
                >
                    {{ cv.id }}
                </button></div>
                <div class="table-cell py-2 text-center">{{ cv.user_id }}</div>
                <div class="table-cell py-2">{{ cv.name }}</div>
                <div class="table-cell py-2">{{ cv.job }}</div>
                <div class="table-cell py-2 text-center">{{ cv.sex }}</div>
                <div class="table-cell py-2 text-center">{{ cv.years_of_exp }}</div>
                <div class="table-cell flex-row flex-nowrap space-x-4">
                    <button type="button" @click="EditCV(cv.id)">
                        <img
                            alt="Edit icon"
                            :src="'/images/edit.png'"
                            class="object-contain h-6 w-6"
                        />
                    </button>
                    <button type="button" @click="RemoveCV(cv.id)">
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
    name: "CvsTable.vue",
    data() {
        return {
            cvs: [],
        };
    },
    methods:{
        showCV(id) {
            Inertia.get(`/cv/${id}`);
        },
      EditCV(){
          return;
      },
        RemoveCV(){
          return;
        }
    },
    mounted() {
        axios.get("/api/cvs").then((response) => {
            this.cvs = response.data;
            console.log(this.cvs);
        });
    },
};
</script>

<style scoped></style>
