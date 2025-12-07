<script setup>
import Layout from "./Components/Layout.vue"

const props = defineProps( {
    time : String
})

defineOptions({
    layout : Layout
})
</script>

<template>
    <h1 class="text-4xl">Users</h1>
    <div style="margin-top: 800px">
        The Time is {{time}}.
        <br/>
        <Link href="/users" preserve-scroll class="text-blue-500">Refresh</Link>
    </div>
</template>

<style scoped>

</style>
