<script setup>
defineProps({
    links: {
        type: Array,
        required: true
    }
})

</script>

<template>
    <Component
        :is="link.url ? 'Link' : 'span'"
        v-for="link in links"
        :href="link.url"
        v-html="link.label"
        class="px-1"
        :class="{
            'text-blue-400' : link.url,
            'text-gray-400' : !link.url,
            'font-bold' : link.active
        }"
        :preserve-scroll="link.url"
    />
</template>

<style scoped>

</style>
