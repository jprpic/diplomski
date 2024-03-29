<script setup>
import BreezeLabel from "@/Components/Label";
import BreezeInput from "@/Components/Input";
</script>

<template>
    <div class="flex w-full flex-wrap">
        <div class="grow-0">
            <BreezeLabel for="address" value="Ulica" />
            <BreezeInput
                id="address"
                type="text"
                class="mt-1 block"
                :value="CV.street"
                @input="updateAddressStreet($event.target.value)"
                required
            />
        </div>

        <div class="ml-4 flex flex-col w-fit grow">
            <div>
                <BreezeLabel for="code" value="Poštanski broj" />
                <BreezeInput
                    id="code"
                    type="number"
                    class="mt-1 block w-full"
                    v-model="code"
                    autocomplete="off"
                    @keyup="fillAddress($event.target.value)"
                    required
                />
            </div>
            <div
                v-if="searchedCode && searchedCode.length > 0"
                class="overflow-auto max-h-40 px-4 pt-2 border border-gray-200 rounded-md shadow-sm"
            >
                <p
                    class="my-1"
                    v-for="postcode in searchedCode"
                    :key="postcode.code"
                >
                    <button
                        type="button"
                        @click="
                            () => {
                                this.code = postcode.code.toString();
                                fillAddress();
                            }
                        "
                    >
                        <span class="font-bold">{{ postcode.code }}</span
                        >, {{ postcode.name }}
                    </button>
                </p>
            </div>
        </div>

        <div class="mx-2 grow-0">
            <BreezeLabel for="postal_name" value="Mjesto" />
            <BreezeInput
                id="postal_name"
                type="text"
                class="mt-1 block"
                disabled
                required
            />
        </div>

        <div class="mx-2 grow">
            <BreezeLabel for="county" value="Županija" />
            <span></span>
            <BreezeInput
                id="county"
                type="text"
                class="mt-1 block w-full"
                disabled
                required
            />
        </div>
    </div>
</template>

<script>
export default {
    name: "AddressInput.vue",
    props: ["postcodes"],
    data() {
        return {
            code: "",
        };
    },
    computed: {
        CV() {
            return this.$store.getters.cv;
        },
        searchedCode() {
            // If the input is empty or a name of an existing skill is entered, hide the autocompletes
            if (
                this.code === "" ||
                this.postcodes.find(
                    (postcode) => postcode.code.toString() === this.code
                )
            ) {
                return null;
            }
            return this.postcodes.filter((postcode) =>
                postcode.code.toString().startsWith(this.code)
            );
        },
    },
    methods: {
        updateAddressStreet(street) {
            this.$store.dispatch("updateAddressStreet", street);
        },
        updatePostcode(code) {
            this.$store.dispatch("updatePostcode", code);
        },
        fillAddress() {
            const postcode = this.postcodes.find(
                (postcode) => postcode.code.toString() === this.code
            );
            if (postcode) {
                this.updatePostcode(postcode.code);
                document.getElementById("postal_name").value = postcode.name;
                document.getElementById("county").value = postcode.county;
            }
        },
    },
    mounted() {
        if (this.CV.postcode) {
            this.code = this.CV.postcode.toString();
            this.fillAddress();
        }
    },
};
</script>

<style scoped></style>
