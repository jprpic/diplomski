<template>
    <div class="py-2 border border-gray-200 rounded-md shadow-sm">
        <div
            v-for="(contact, index) in contacts"
            :key="index"
            class="flex items-stretch"
        >
            <ContactItem :index="index" />
            <BreezeButton
                @click="removeContact(index)"
                type="button"
                class="ml-2 h-1/2 self-center mt-8"
                >X</BreezeButton
            >
        </div>
    </div>
    <BreezeButton class="mt-2" type="button" @click="addContact()"
        >Dodaj kontakt</BreezeButton
    >
</template>

<script>
import BreezeButton from "../Button.vue";
import ContactItem from "@/Components/OrgCv/ContactItem";
import BreezeLabel from "../Label.vue";
import BreezeInput from "../Input.vue";
export default {
    name: "ContactList",
    components: {
        ContactItem,
        BreezeButton,
        BreezeLabel,
        BreezeInput,
    },
    computed: {
        contacts() {
            return this.$store.getters.orgCv.contacts;
        },
    },
    methods: {
        addContact() {
            this.$store.dispatch("addOrgContact");
        },
        removeContact(index) {
            if (index > -1) {
                // only splice array when item is found
                this.$store.dispatch("removeOrgContact", index);
            }
        },
    },
};
</script>

<style scoped></style>
