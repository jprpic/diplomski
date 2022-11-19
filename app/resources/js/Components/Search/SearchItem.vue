<template>
    <div
        class="px-4 py-2 border border-gray-200 rounded-md shadow-md bg-gray-50"
    >
        <div class="flex w-full">
            <div class="flex-initial">
                <img
                    :src="target.img_url"
                    alt="Profilna slika"
                    class="object-contain h-20 w-20 rounded-full"
                />
            </div>
            <div class="grow">
                <div class="flex w-full text-gray-700">
                    <div class="flex flex-col ml-2 w-2/3">
                        <div>
                            <span class="text-xl font-semibold">{{
                                target.name
                            }}</span>
                        </div>
                        <div>
                            {{ target.age }},
                            <span class="font-semibold">{{ target.sex }}</span>
                        </div>
                        <div>
                            <span
                                >{{ userCity }},
                                {{ userCounty }}</span
                            >
                        </div>
                    </div>
                    <div class="flex flex-col text-right w-1/3">
                        <div>
                            <span
                                class="text-xl font-semibold whitespace-normal"
                            >
                                {{ target.job }}</span
                            >
                        </div>
                        <div>
                            <span class="text-md">Godine iskustva:</span>
                            {{ target.years_of_exp }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            v-if="searchedSkills.length"
            class="mt-2 flex w-full justify-center"
        >
            <div
                class="text-md font-medium w-1/3 rounded-lg bg-gradient-to-r from-lime-400/50 flex flex-col text-center py-2"
            >
                <div v-for="skill in foundSkills">
                    <span class="text-lime-900">
                        {{ skill.name }} ({{ skill.proficiency }})
                    </span>
                </div>
            </div>
            <div
                class="text-md font-medium w-1/3 rounded-lg bg-gradient-to-l from-red-400/50 flex flex-col text-center py-2"
            >
                <div v-for="skill in missingSkills">
                    {{ skill.name }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {usePage} from "@inertiajs/inertia-vue3";

export default {
    name: "SearchItem.vue",
    props: ["target", "searchedSkills"],
    computed: {
        availableSkills() {
            return usePage().props.value.availableSkills;
        },
        foundSkills() {
            if (!this.target.skill_proficiencies) {
                return [];
            }
            const userSkills = this.target.skill_proficiencies.filter((el) =>
                this.searchedSkills.includes(el["skill_id"])
            );
            const userSkillIDs = userSkills.map((el) => el["skill_id"]);
            const skills = this.availableSkills.filter((el) =>
                userSkillIDs.includes(el.id)
            );
            for (let i = 0; i < skills.length; i++) {
                userSkills[i].name = skills[i].name;
            }
            return userSkills;
        },
        missingSkills() {
            if (!this.target.skill_proficiencies) {
                return [];
            }
            const userSkills = this.target.skill_proficiencies.filter((el) =>
                this.searchedSkills.includes(el["skill_id"])
            );
            const userSkillIDs = userSkills.map((el) => el["skill_id"]);
            const missingSkillIDs = this.searchedSkills.filter(
                (el) => !userSkillIDs.includes(el)
            );
            return this.availableSkills.filter((el) =>
                missingSkillIDs.includes(el.id)
            );
        },
        userCity() {
          if(this.target["postcodes.name"]){
            return this.target["postcodes.name"];
          }else if(this.target.location.name) {
            return this.target.location.name;
          }
          return '';
        },
      userCounty() {
        if(this.target["postcodes.county"]){
          return this.target["postcodes.county"];
        }else if(this.target.location.county) {
          return this.target.location.county;
        }
        return '';
      },
      userAge() {
        if(this.target["postcodes.county"]){
          return this.target["postcodes.county"];
        }else if(this.target.location.county) {
          return this.target.location.county;
        }
        return '';
      }
    },
  created() {
      if(this.target.age === undefined) {
        this.target.age = Math.floor((new Date() - new Date(this.target.birthdate).getTime()) / 3.15576e+10);
      }
  }
};
</script>

<style scoped></style>
