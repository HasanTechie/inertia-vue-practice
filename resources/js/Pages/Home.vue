<script setup>
import Nav from "./Components/Nav.vue";
const props = defineProps({
    name: String,
    frameworks: Array
});
</script>

<template>
    <h1 class="text-4xl">Hello</h1>
    <Nav />
    Hello World {{ props.name }}
</template>

<style scoped>

</style>
