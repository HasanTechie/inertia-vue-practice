<script setup>

import Nav from "./Components/Nav.vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps( {
    time : String
})
</script>

<template>
    <h1 class="text-4xl">Users</h1>
    <Nav />

    <div style="margin-top: 500px">
        The Time is {{time}}.
        <br/>
        <Link href="/users" preserve-scroll class="text-blue-500">Refresh</Link>
    </div>
</template>

<style scoped>

</style>
