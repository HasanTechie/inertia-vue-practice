<script setup>
const props = defineProps({
    active : Boolean
})
</script>

<template>
    <Link class="text-black-500 hover:underline"
          :class="{'font-bold' : active}"><slot/>
    </Link>
</template>

<style scoped>

</style>
