<template>
    <svg aria-hidden="true">
        <use :href="`#icon-${name}`" />
    </svg>
</template>

<script setup lang="ts">
const props = defineProps<{
    name: string
}>()
</script>
