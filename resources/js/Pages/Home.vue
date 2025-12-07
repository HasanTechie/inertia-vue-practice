<script setup>
const props = defineProps({
    name: String,
    frameworks: Array
});

</script>

<template>
    <Head>
        <title>Home</title>
        <meta name="description" content="Home page meta description" />
    </Head>
    <h1 class="text-4xl">Hello</h1>
        Hello World {{ props.name }}
</template>

<style scoped>

</style>
