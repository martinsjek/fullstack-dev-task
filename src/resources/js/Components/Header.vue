<template>
    <header>
        <div class="container">
            <div class="logo">
                <img src="/images/logo.svg" alt="">
            </div>
            <nav>
                <ul>
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
            </nav>
        </div>
    </header>
</template>

<script setup lang="ts">
import SvgIcon from '../Partials/SvgIcon.vue'
</script>

<style lang="scss">
@import "../../scss/base/colors";

header {
    padding: 15px 0;
    font-size: 1.4rem;

    .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo {
        width: 114px;
    }

    ul {
        display: flex;
        align-items: center;
    }

    li {
        &:not(:last-child) {
            margin-right: 34px;
        }
    }

    a {
        color: $white;
        display: inline-flex;
        align-items: center;
    }

    svg {
        width: 14px;
        height: 14px;
        margin-right: 8px;
    }
}
</style>
