<template>
    <header>
        <div class="container">
            <a href="#" class="burger" aria-label="Burger menu" @click.prevent="toggleMenu">
                <SvgIcon name="burger"/>
            </a>
            <a href="/" class="logo" aria-label="Logo">
                <img src="/images/logo.svg" width="83" height="28" alt="">
            </a>
            <a href="#" class="user" aria-label="User">
                <SvgIcon name="person"/>
            </a>
            <nav :class="{open: menuOpen}">
                <div class="container">
                    <MenuItems/>
                </div>
            </nav>
        </div>
    </header>
</template>

<script setup lang="ts">
import MenuItems from './MenuItems.vue'
import SvgIcon from '../../Partials/SvgIcon.vue'
import {ref} from "vue"

const menuOpen = ref(false)

const toggleMenu = () => menuOpen.value = !menuOpen.value
</script>

<style lang="scss" scoped>
@import "../../../scss/base/colors";

header {
    padding: 16px 0;
    position: sticky;
    top: 0;
    z-index: 1;
    background: $black;

    .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo {
        width: 83px;
    }

    svg {
        width: 20px;
        height: 20px;
    }

    nav {
        position: fixed;
        left: 0;
        top: 60px;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        transform: translateX(-100%);
        transition: 0.3s all;
        background: $black;
        padding: 2rem 0 0 0;
        border-top: 1px solid $white;

        &.open {
            transform: translateX(0);
        }
    }

    a {
        color: $white;
    }
}
</style>
