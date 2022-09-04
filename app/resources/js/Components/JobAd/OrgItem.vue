<template>
    <div
        class="p-4 mb-4 border border-gray-200 rounded-md shadow-md bg-gray-50"
    >
        <p class="text-xl font-bold">{{ jobAd.name }}</p>
    </div>
</template>

<script>
export default {
    name: "Item.vue",
    props: {
        jobAd: {
            required: true,
        },
    },
};
</script>

<style scoped></style>
