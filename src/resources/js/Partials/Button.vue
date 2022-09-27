<template>
    <component :is="tag"
               class="btn"
               :class="{'btn-primary': type === 'primary', 'btn-secondary': type === 'secondary', loading: loading}">
        <span>{{ text }}</span>
        <SvgIcon name="arrow"></SvgIcon>
    </component>
</template>

<script setup lang="ts">
import SvgIcon from './SvgIcon.vue'

const props = defineProps<{
    tag: 'button' | 'a',
    type: 'primary' | 'secondary',
    text: string,
    loading?: boolean
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

    &.loading {
        pointer-events: none;
        position: relative;

        &:after {
            content: '';
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' version='1.0' viewBox='0 0 128 70' xml:space='preserve'%3E%3Crect width='100%25' height='100%25' fill='transparent'/%3E%3Ccircle fill='%23fff' r='11' transform='translate(16 56)'%3E%3CanimateTransform attributeName='transform' type='translate' additive='sum' values='0,1;0,-40;0,1;0,1;0,1;0,1;0,1;0,1;0,1;0,1' dur='1800ms' repeatCount='indefinite'/%3E%3C/circle%3E%3Ccircle fill='%23fff' r='11' transform='translate(64 56)'%3E%3CanimateTransform attributeName='transform' type='translate' additive='sum' values='0,1;0,1;0,1;0,1;0,-40;0,1;0,1;0,1;0,1;0,1' dur='1800ms' repeatCount='indefinite'/%3E%3C/circle%3E%3Ccircle fill='%23fff' r='11' transform='translate(112 56)'%3E%3CanimateTransform attributeName='transform' type='translate' additive='sum' values='0,1;0,1;0,1;0,1;0,1;0,1;0,1;0,-40;0,1;0,1' dur='1800ms' repeatCount='indefinite'/%3E%3C/circle%3E%3C/svg%3E");
            background-repeat: no-repeat;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: 24px;
            background-position: center;
            background-color: $red;
            z-index: 2;
            border-radius: 100px;
        }
    }

    svg {
        width: 24px;
        height: 24px;
        margin-left: 8px;
    }
}
</style>
