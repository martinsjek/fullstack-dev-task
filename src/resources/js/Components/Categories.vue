<template>
    <section class="categories">
        <div class="container">
            <a href="#" v-for="(item) in categories" :key="item.name">
                <div class="icon-wrap">
                    <SvgIcon :width="item.width" :height="item.height" :name="item.icon"/>
                </div>
                <span>{{ item.name }}</span>
            </a>
            <a href="#" class="all">
                <span>Visas iekārtas</span>
                <SvgIcon name="arrow"/>
            </a>
        </div>
    </section>
</template>

<script setup lang="ts">
import SvgIcon from '../Partials/SvgIcon.vue'

const categories = [
    {
        width: 21,
        height: 36,
        icon: 'phone',
        name: 'Telefoni'
    },
    {
        width: 27,
        height: 36,
        icon: 'tablet',
        name: 'Planšetes'
    },
    {
        width: 48,
        height: 31,
        icon: 'computer',
        name: 'Datori'
    },
    {
        width: 44,
        height: 31,
        icon: 'tv',
        name: 'Televizori'
    },
    {
        width: 26,
        height: 36,
        icon: 'watch',
        name: 'Viedpalīgi'
    },
    {
        width: 51,
        height: 24,
        icon: 'drone',
        name: 'Droni'
    },
    {
        width: 36,
        height: 28,
        icon: 'headphones',
        name: 'Aksesuāri'
    }
]
</script>

<style lang="scss">
@import "../../scss/base/colors";

.categories {
    padding-bottom: 66px;
    @media (min-width: 992px) {
        padding-bottom: 102px;
    }

    .container {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
        @media (min-width: 768px) {
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 30px;
        }
        @media (min-width: 1200px) {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    a {
        border: 1px solid $gray;
        border-radius: 5px;
        display: flex;
        align-items: center;
        padding: 2.2rem 3.8rem;
        transition: 0.3s background-color;

        &:hover, &:focus {
            background: $gray;
        }
    }

    .icon-wrap {
        width: 51px;
        height: 36px;
        margin-right: 76px;
        display: flex;
        align-items: center;
        justify-content: center;
        @media (min-width: 768px) {
            margin-right: 40px;
        }
    }

    svg {
        color: $red;
    }

    span {
        color: $white;
    }

    .all {
        background: $light-red;
        justify-content: center;
        padding: 2.6rem 3.8rem;
        @media (min-width: 992px) {
            padding: 2.2rem 3.8rem;
        }

        svg {
            color: $white;
            width: 24px;
            height: 24px;
            margin-left: 26px;
        }
    }
}
</style>
