<script setup>
import Layout from "./Components/Layout.vue"

const props = defineProps({
    name: String,
    frameworks: Array
});
defineOptions({
    layout : Layout
})
</script>

<template>
    <h1 class="text-4xl">Hello</h1>
        Hello World {{ props.name }}
</template>

<style scoped>

</style>
