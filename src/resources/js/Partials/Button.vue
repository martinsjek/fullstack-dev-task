<template>
    <component :is="tag" class="btn"
               :class="{'btn-primary': type === 'primary', 'btn-secondary': type === 'secondary'}">
        <span>{{ text }}</span>
        <SvgIcon name="arrow"></SvgIcon>
    </component>
</template>

<script setup lang="ts">
import SvgIcon from './SvgIcon.vue'

const props = defineProps<{
    tag: 'button' | 'a',
    type: 'primary' | 'secondary',
    text: string
}>()
</script>

<style lang="scss">
@import "../../scss/base/colors";

.btn {
    font-size: 1.6rem;
    padding: 12px 20px;
    border-radius: 5px;
    border: 1px solid $red;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;

    &-primary {
        background: $red;
        color: $white;
    }

    &-secondary {
        color: $red;
    }

    svg {
        width: 24px;
        height: 24px;
        margin-left: 8px;
    }
}
</style>
