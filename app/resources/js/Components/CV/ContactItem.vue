<template>
    <div class="flex w-2/3  flex-wrap">
        <div class="flex-none items-stretch ml-4 mt-2">
            <BreezeLabel for="contacts" value="Type" />

            <select name="contacts" id="contacts" class="mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    :value="type"
                    @input="$emit('update:type', $event.target.value)">
                <option disabled value="">Please select one</option>
                <option value="linkedin">Linked In</option>
                <option value="twitter">Twitter</option>
                <option value="instagram">Instagram</option>

            </select>
        </div>

        <div class="grow ml-4 mt-2">
            <BreezeLabel for="url" value="Url" />
            <BreezeInput id="url" type="url" class="mt-1 w-full block" required autofocus
                         :value="url"
                         @input="$emit('update:url', $event.target.value)"/>
        </div>
    </div>

</template>

<script>
import BreezeLabel from '../Label.vue';
import BreezeInput from '../Input.vue';
import BreezeButton from '../Button.vue';
export default {
    name: "ContactItem",
    components: {
        BreezeLabel,
        BreezeInput,
        BreezeButton
    },
    props: ['type','url'],
    emits: ['update:type','update:url']
}
</script>


<style scoped>
</style>
