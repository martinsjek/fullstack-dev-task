<template>
    <header>
        <div class="container">
            <a href="/" class="logo" aria-label="Logo">
                <img src="/images/logo.svg" width="144" height="38" alt="">
            </a>
            <nav>
                <MenuItems/>
            </nav>
        </div>
    </header>
</template>

<script setup lang="ts">
import MenuItems from './MenuItems.vue'
</script>

<style lang="scss" scoped>
@import "../../../scss/base/colors";

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
}
</style>
