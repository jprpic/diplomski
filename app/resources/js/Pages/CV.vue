<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import EmptyLayout from '@/Layouts/Empty.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>
<template>
    <Head title="CV" />
    <EmptyLayout>
        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8" style="max-width: 80rem">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    <!-- CV Start -->
                        <div class="flex w-full">
                            <!--  Basic Info and Experiences -->
                            <div class="w-2/3 flex flex-col flex-none mr-2">
                                <div class="flex flex-row">
                                    <div class="min-w-fit mt-2">
                                        <img :src="CV.img_url" alt="Profile picture" class="outline outline-offset-2 outline-1 outline-gray-900/75 object-contain h-32 w-32 rounded-lg"/>
                                    </div>
                                    <div class="mx-4 grow">
                                        <p class="text-2xl font-bold" > {{ CV.name }} </p>
                                        <p class="text-lg font-semibold">{{ CV.job }}</p>
                                        <p>{{ CV.description }}</p>
                                    </div>
                                </div>

                                <div class="mt-6">
                                    <div class="flex flex-col">
                                        <div class="flex flex row" v-if="CV.experiences.find(el => el.type === 'employment')">
                                            <img alt="employment icon" :src="'/images/employment.png'" class="object-contain h-10 w-10" />
                                            <span class="my-2 ml-2 uppercase text-2xl font-bold"> Employment </span>
                                        </div>
                                        <div class="mb-2" v-for="experience in CV.experiences" :key="experience.id">
                                            <div class="p-2 border border-gray-200 rounded-md shadow-md bg-gray-50" v-if="experience.type === 'employment'">
                                                <p class="text-lg font-semibold"> {{ experience.name }} </p>
                                                <p class="font-semibold"> {{ experience.source }} </p>
                                                <div class="flex flex-row items-center">
                                                    <img alt="clock icon" :src="'/images/clock.png'" class="object-contain h-4 w-4" />
                                                    <p class="ml-1 italic text-sm"> {{ dateToString(experience.started_at) }} -
                                                        <span v-if="experience.finished_at"> {{ dateToString(experience.finished_at) }}</span>
                                                        <span v-else> Present </span>
                                                    </p>
                                                </div>
                                                <ul class="ml-8 list-disc">
                                                    <li v-for="result in experience.results">
                                                        {{ result }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="flex flex row" v-if="CV.experiences.find(el => el.type === 'education')">
                                            <img alt="education icon" :src="'/images/education.png'" class="object-contain h-12 w-12" />
                                            <span class="my-2 ml-2 uppercase text-2xl font-bold"> Education </span>
                                        </div>
                                        <div v-for="experience in CV.experiences" :key="experience.id">
                                            <div class="mb-2 p-2 border border-gray-200 rounded-md shadow-md bg-gray-50" v-if="experience.type === 'education'">
                                                <p class="text-lg font-semibold"> {{ experience.name }} </p>
                                                <p class="font-semibold"> {{ experience.source }} </p>
                                                <div class="flex flex-row items-center">
                                                    <img alt="clock icon" :src="'/images/clock.png'" class="object-contain h-4 w-4" />
                                                    <p class="italic text-sm ml-1"> {{ dateToString(experience.started_at) }} -
                                                        <span v-if="experience.finished_at"> {{ dateToString(experience.finished_at) }}</span>
                                                        <span v-else> Present </span>
                                                    </p>
                                                </div>

                                                <ul class="ml-8 list-disc">
                                                    <li v-for="result in experience.results">
                                                        {{ result }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Contacts and Skills -->
                            <div class="ml-2 flex flex-col grow">
                                <!--  Contacts  -->
                                <div class="p-4 flex flex-col w-full bg-gray-400 rounded-lg border border-gray-600/75 shadow-lg">
                                    <div class="flex flex-row items-center my-1">
                                        <img :src="'/images/location.png'" alt="contact icon" class="object-contain h-6 w-6"> <span class="ml-2">{{ location.name }}</span>
                                    </div>
                                    <div class="flex flex-row items-center my-1" v-for="contact in CV.contacts" :key="contact.contact_id">
                                        <img :src="getImgUrl(contact.contact_id)" alt="contact icon" class="object-contain h-6 w-6">
                                        <span class="ml-2">{{ contact.value }}</span>
                                    </div>

                                </div>

                                <!-- Skills -->
                                <div class="p-4 mt-8 flex flex-col w-full bg-gray-400 rounded-lg border border-gray-600/75 shadow-lg">
                                    <span class="uppercase text-2xl font-bold">Skills</span>
                                    <ul v-for="skill in sortedSkills">
                                       <li class="flex items-center whitespace-normal">
                                           <span class="mr-1 truncate hover:whitespace-normal" :class="getSkillClass(getSkillType(skill.skill_id))">{{ getSkillName(skill.skill_id) }}</span>
                                           <img v-for="n in skill.proficiency" alt="star icon" :src="'/images/star_black.png'" class="pb-1 object-contain h-4 w-4" />
                                           <img v-for="n in ( 5 - skill.proficiency)" alt="star icon" :src="'/images/star_empty.png'" class="pb-1 object-contain h-4 w-4" />
                                       </li>
                                    </ul>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

    </EmptyLayout>


</template>

<script>
export default {
    name: "CV.vue",
    props:['CV', 'location'],
    computed:{
        sortedSkills(){
            return this.CV.skill_proficiencies.sort((a, b) => { return b.proficiency - a.proficiency } );
        }
    },
    methods:{
        getContactName(contact_id){
            return this.CV.contact_info.find(contact => contact.id === contact_id).name;
        },
        getSkillName(skill_id){
            return this.CV.skills.find(skill => skill.id === skill_id).name;
        },
        getSkillType(skill_id){
            return this.CV.skills.find(skill => skill.id === skill_id).type;
        },
        dateToString(string){
            let date = new Date(string);
            return `${this.formatNumber(date.getMonth()+1, 2)}/${date.getFullYear()}`;
        },
        formatNumber(number, minimumIntegerDigits){
            return number.toLocaleString('en-US', {
                minimumIntegerDigits: minimumIntegerDigits,
                useGrouping: false
            });
        },
        getSkillClass(skill_type){
            if(skill_type === 'hard'){
                return 'underline decoration-sky-700'
            }else{
                return 'underline decoration-pink-700'
            }
        },
        getImgUrl(contact_id){
            return `/images/${this.getContactName(contact_id).toLowerCase()}.png`;
        }
    }
}
</script>

<style scoped>

</style>
