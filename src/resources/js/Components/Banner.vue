<template>
    <section class="banner">
        <picture>
            <source media="(min-width: 768px)" srcset="/images/banner-desktop.jpg">
            <source media="(max-width: 767px)" srcset="/images/banner-mobile.jpg">
            <img src="/images/banner-mobile.jpg" alt="">
        </picture>
        <div class="container">
            <h1>Melnā piektdiena tikai 27. novembrī</h1>
            <h2 class="h3">Kur skaties – tur atlaides!</h2>
        </div>
    </section>
</template>

<style lang="scss">
.banner {
    max-width: 1440px;
    margin: 0 auto;
    position: relative;

    .container {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    h1 {
        max-width: 372px;
    }
}
</style>
