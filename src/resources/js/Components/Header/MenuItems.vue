<template>
    <ul class="menu-items">
        <li>
            <a href="#">
                <SvgIcon name="search"/>
                <span>Meklēt</span>
            </a>
        </li>
        <li>
            <a href="#">
                <SvgIcon name="book"/>
                <span>Palīdzība</span>
            </a>
        </li>
        <li>
            <a href="#">
                <SvgIcon name="person"/>
                <span>Autorizēties</span>
            </a>
        </li>
    </ul>
</template>

<script setup lang="ts">
import SvgIcon from '../../Partials/SvgIcon.vue'
</script>

<style lang="scss">
@import "../../../scss/base/colors";

.menu-items {
    display: flex;
    flex-direction: column;
    @media (min-width: 768px) {
        flex-direction: row;
        align-items: center;
    }

    li {
        &:not(:last-child) {
            margin: 0 0 20px 0;
            @media (min-width: 768px) {
                margin: 0 34px 0 0;
            }
        }
    }

    a {
        color: $white;
        display: inline-flex;
        align-items: center;
    }

    svg {
        width: 16px;
        height: 16px;
        margin-right: 8px;
    }
}
</style>
