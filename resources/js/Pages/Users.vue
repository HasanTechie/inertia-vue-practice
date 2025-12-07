<script setup>

const props = defineProps( {
    users : Array
})

</script>

<template>
    <Head>
        <title>Users</title>
        <meta type="description" content="Description about Users">
    </Head>
    <h1 class="text-4xl">Users</h1>
    <ul>
        <li v-for="user in users" :key="user.id" v-text="user.name"></li>
    </ul>

</template>

<style scoped>

</style>
