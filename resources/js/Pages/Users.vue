<script setup>

const props = defineProps( {
    time : String
})

</script>

<template>
    <Head>
        <title>Users</title>
        <meta type="description" content="Description about Users">
    </Head>
    <h1 class="text-4xl">Users</h1>
    <div style="margin-top: 800px">
        The Time is {{time}}.
        <br/>
        <Link href="/users" preserve-scroll class="text-blue-500">Refresh</Link>
    </div>
</template>

<style scoped>

</style>
