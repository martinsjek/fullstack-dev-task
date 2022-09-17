<template>
    <section class="banner">
        <picture>
            <source media="(min-width: 992px)" srcset="/images/banner-desktop.jpg">
            <source media="(max-width: 991px)" srcset="/images/banner-mobile.jpg">
            <img :width="width >= 992 ? 1440 : 991" :height="width >= 992 ? 400 : 445" src="/images/banner-mobile.jpg"
                 alt="">
        </picture>
        <div class="container">
            <h1>Melnā piektdiena tikai 27. novembrī</h1>
            <h2 class="h3">Kur skaties – tur atlaides!</h2>
        </div>
    </section>
</template>

<script setup lang="ts">
import {useWindowSize} from "@vueuse/core"

const {width} = useWindowSize()
</script>

<style lang="scss">
.banner {
    max-width: 1440px;
    margin: 0 auto;
    position: relative;

    img {
        height: 445px;
        object-fit: cover;
        object-position: center;
        width: 100%;
        @media (min-width: 992px) {
            height: 400px;
        }
    }

    .container {
        position: absolute;
        bottom: 48px;
        left: 50%;
        transform: translateX(-50%);
        @media (min-width: 992px) {
            top: 0;
            padding-top: 90px;
        }
    }

    h1 {
        max-width: 372px;
        margin-bottom: 20px;
        @media (min-width: 992px) {
            margin-bottom: 50px;
        }
    }

    h2 {
        font-size: 1.6rem;
        @media (min-width: 992px) {
            font-size: 2.4rem;
        }
    }
}
</style>
