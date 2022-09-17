<template>
    <Desktop v-if="width >= 768"/>
    <Mobile v-else/>
</template>

<script setup lang="ts">
import Desktop from './Desktop.vue'
import Mobile from './Mobile.vue'
import {useWindowSize} from "@vueuse/core"

const {width} = useWindowSize()
</script>
