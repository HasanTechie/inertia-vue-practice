<script setup>
defineProps({
    links : Array,
    required : true
})
</script>

<template>
    <Component
        :is="link.url ? 'Link' : 'span'"
        v-for="link in links"
        :href="link.url"
        v-html="link.label"
        class="px-1"
        :class="link.url ? 'text-blue-300' : 'text-gray-500'"
    />
</template>

<style scoped>

</style>
